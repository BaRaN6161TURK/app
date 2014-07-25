<?php

/**
 * Class CrunchyrollFeedIngester
 */
class CrunchyrollFeedIngester extends VideoFeedIngester {
	const NAMESPACE_URI = 'http://search.yahoo.com/mrss/';

	protected static $API_WRAPPER = 'CrunchyrollApiWrapper';
	protected static $PROVIDER = 'crunchyroll';
	protected static $CLIP_TYPE_BLACKLIST = [ ];
	protected static $FEED_URL = 'http://www.crunchyroll.com/syndication/feed?type=series&affiliate_code=af-90111-uhny';
	protected static $FEED_URL_COLLECTIONS = 'http://www.crunchyroll.com/syndication/feed?type=episodes&id=$1&affiliate_code=af-90111-uhny';

	/**
	 * Contains desired series titles and Ids
	 * @var array
	 */
	private static $VIDEO_SERIES = [
		'Another' => [ 240622 ],
		'Attack on Titan' => [ 254209 ],
		'Bleach' => [ 42854 ],
		'Fate Zero' => [ 238014 ],
		'Gargantia on the Verdurous Planet' => [ 254063 ],
		'Golden Time' => [ 257145 ],
		'Hunter x Hunter' => [ 237800 ],
		'JoJo\'s Bizarre Adventure' => [ 260407 ],
		'Kill la Kill' => [ 257137 ],
		'My Teen Romantic Comedy SNAFU' => [ 253981 ],
		'Naruto' => [ 42850 ],
		'Naruto Shippuden' => [ 42852 ],
		'One Piece' => [ 257631 ],
		'Saint Seiya Hades' => [ 260965 ],
		'Saint Seiya Omega' => [ 244002 ],
		'Saint Seiya The Lost Canvas' => [ 224831 ],
		'Sword Art Online' => [ 246948 ],
		'The Pet Girl of Sakurasou' => [ 249482 ],
		'WATAMOTE' => [ 255741 ],
	];

	/**
	 * Get a flat list of all serie Ids that we must ingest
	 * @return array
	 */
	public function getAllSeriesIds() {
		$ids = [];
		foreach ( self::$VIDEO_SERIES as $videoSerie ) {
			$ids = array_merge( $ids, array_values( $videoSerie ) );
		}

		return array_unique( $ids );
	}

	/**
	 * Download content of given feed
	 * @param $feedUrl
	 * @return int|string|void
	 */
	public function downloadCollectionFeed( $feedUrl ) {
		return $this->download( $feedUrl );
	}

	/**
	 * Download content of class' feed URL
	 * @return int|string
	 */
	public function downloadFeed() {
		return $this->download( static::$FEED_URL );
	}

	/**
	 * Downloads feed and return it (return 0 on failure)
	 * @param string $feedUrl
	 * @return int|string
	 */
	public function download( $feedUrl ) {
		wfProfileIn( __METHOD__ );

		print( "Connecting to $feedUrl ...\n" );

		$content = $this->getUrlContent( $feedUrl );

		if ( !$content ) {
			$this->videoErrors( "ERROR: problem downloading content.\n" );
			$content = 0;
		}

		wfProfileOut( __METHOD__ );

		return $content;
	}

	/**
	 * Retrieve all collection feeds applicable
	 * This will return an array of feed links for each collection
	 * @return array|void
	 */
	public function getCollectionFeeds() {
		$content = $this->downloadFeed();

		$seriesIds = $this->getAllSeriesIds();
		$leadingString = '/series-';

		$doc = new DOMDocument( '1.0', 'UTF-8' );
		@$doc->loadXML( $content );
		$items = $doc->getElementsByTagName( 'item' );
		$collectionFeeds = [];

		foreach ( $items as $item ) {
			$seriesGuid = $item->getElementsByTagName( 'series-guid' )->item( 0 )->textContent;
			$serieId = ( int ) substr( $seriesGuid, strpos( $seriesGuid, $leadingString ) + strlen( $leadingString ) );

			// Filter out series we are not interested in
			if ( !in_array( $serieId, $seriesIds ) ) {
				continue;
			}

			// TODO: Filter out not-recently-modified feeds for better efficiency

			$collectionFeeds[] = urldecode( $item->getElementsByTagName( 'link' )->item( 0 )->textContent );
		}

		return array_unique( $collectionFeeds );
	}

	/**
	 * @inheritdoc
	 */
	public function import( $content = '', $params = [ ] ) {
		wfProfileIn( __METHOD__ );

		$articlesCreated = 0;
		$debug = !empty( $params['debug'] );
		$addlCategories = empty( $params['addlCategories'] ) ? [ ] : $params['addlCategories'];

		foreach ( $this->getCollectionFeeds() as $collectionFeed ) {
			$content = $this->downloadCollectionFeed( $collectionFeed );

			$doc = new DOMDocument( '1.0', 'UTF-8' );
			@$doc->loadXML( $content );
			$items = $doc->getElementsByTagName( 'item' );
			$numItems = $items->length;
			$this->videoFound( $numItems );

			$language = null;
			$elements = $doc->getElementsByTagName( 'language' );
			if ( $elements->length > 0 ) {
				$language = $this->convertLanguageCode( $elements->item( 0 )->textContent );
			}

			for ( $i = 0; $i < $numItems; ++$i ) {
				$clipData = [ ];
				$item = $items->item( $i );

				$clipData['series'] = $item->getElementsByTagName( 'seriesTitle' )->item( 0 )->textContent;

				// check for video name
				$elements = $item->getElementsByTagName( 'title' );
				if ( $elements->length > 0 ) {
					$clipData['titleName'] = $clipData['series'] . ' - ' . html_entity_decode( $elements->item( 0 )->textContent );
				} else {
					$this->videoSkipped();
					continue;
				}

				// Skip the premium videos - free publish date for them is in the future
				$elements = $item->getElementsByTagName( 'freePubDate' );
				if ( $elements->length > 0 ) {
					$freePublishDate = strtotime( $elements->item( 0 )->textContent );
					if ( $freePublishDate > time() ) {
						$this->videoSkipped( "\nPremium video (title: {$clipData['titleName']})\n" );
						continue;
					}
				}

				$clipData['name'] = $clipData['titleName'];

				$elements = $item->getElementsByTagName( 'description' );
				if ( $elements->length > 0 ) {
					$clipData['description'] = trim( strip_tags( $elements->item( 0 )->textContent ) );
				} else {
					$clipData['description'] = '';
				}

				// check for video id
				$elements = $item->getElementsByTagName( 'mediaId' );
				if ( $elements->length > 0 ) {
					$clipData['videoId'] = $elements->item( 0 )->textContent;
				}

				if ( !isset( $clipData['videoId'] ) ) {
					$this->videoWarnings( "ERROR: videoId NOT found for {$clipData['titleName']} - {$clipData['description']}.\n" );
					continue;
				}

				if ( empty( $clipData['videoId'] ) ) {
					$this->videoWarnings( "ERROR: Empty videoId for {$clipData['titleName']} - {$clipData['description']}.\n" );
					continue;
				}

				// check for nonadult videos
				$elements = $item->getElementsByTagName( 'rating' );
				$clipData['ageGate'] = ( $elements->length > 0 && $elements->item( 0 )->textContent == 'nonadult' ) ? 0 : 1;

				if ( $clipData['ageGate'] ) {
					print( "Adult video: {$clipData['titleName']} ({$clipData['videoId']}).\n" );
					$clipData['ageRequired'] = $clipData['ageGate'] ? '13' : '';
				}

				$clipData['published'] = strtotime( $item->getElementsByTagName( 'pubDate' )->item( 0 )->textContent );
				$clipData['publisher'] = $item->getElementsByTagName( 'publisher' )->item( 0 )->textContent;
				$clipData['expirationDate'] = strtotime( $item->getElementsByTagName( 'freeEndPubDate' )->item( 0 )->textContent );
				$clipData['videoUrl'] = urldecode( $item->getElementsByTagName( 'link' )->item( 0 )->textContent );

				$subTitleLangs = $item->getElementsByTagName( 'subtitleLanguages' );
				if ( $subTitleLangs->length > 0 ) {
					$clipData['subtitle'] = $this->convertSubtitleLanguageCode(
						$item->getElementsByTagName( 'subtitleLanguages' )->item( 0 )->textContent
					);
				}

				$clipData['regionalRestrictions'] = strtoupper(
					str_replace( ' ', ', ', $item->getElementsByTagName( 'restriction' )->item( 0 )->textContent )
				);

				$elements = $item->getElementsByTagName( 'season' );
				if ( $elements->length > 0 ) {
					$clipData['season'] = 'Season ' . $elements->item( 0 )->textContent;
				} else {
					$clipData['season'] = '';
				}

				$elements = $item->getElementsByTagName( 'episodeNumber' );
				if ( $elements->length > 0 ) {
					$clipData['episode'] = 'Episode ' . $elements->item( 0 )->textContent;
				} else {
					$clipData['episode'] = '';
				}

				$clipData['partnerVideoId'] = $item->getElementsByTagName( 'mediaId' )->item( 0 )->textContent;

				// The first thumbnail returned by crunchyroll is the largest one - get that!
				$elements = $item->getElementsByTagName( 'thumbnail' );
				$clipData['thumbnail'] = ( $elements->length > 0 ) ? $elements->item( 0 )->getAttribute( 'url' ) : '';

				$elements = $item->getElementsByTagName( 'keywords' );
				$clipData['keywords'] = ( $elements->length > 0 ) ? $elements->item( 0 )->textContent : '';

				$elements = $item->getElementsByTagName( 'category' );
				if ( $elements->length > 0 ) {
					$clipData['category'] = $this->getCategory( $elements->item( 0 )->textContent );
					$clipData['type'] = '';
				}

				if ( $language ) {
					$clipData['language'] = $language;
				}
				$clipData['duration'] = $item->getElementsByTagName( 'duration' )->item( 0 )->textContent;

				$clipData['genres'] = [ ];
				$clipData['actors'] = [ ];
				$clipData['hd'] = 0;
				$clipData['provider'] = 'crunchyroll';

				$msg = '';
				if ( $this->isClipTypeBlacklisted( $clipData ) ) {
					if ( $debug ) {
						$this->videoSkipped( "Skipping {$clipData['titleName']} - {$clipData['description']}. On clip type blacklist\n" );
					}
				} else {
					$createParams = array( 'addlCategories' => $addlCategories, 'debug' => $debug );
					$articlesCreated += $this->createVideo( $clipData, $msg, $createParams );
				}

				if ( $msg ) {
					print "ERROR: $msg\n";
				}
			}
		}

		wfProfileOut( __METHOD__ );

		return $articlesCreated;
	}

	/**
	 * Create a list of category names to add to the new file page
	 * @param array $data
	 * @param array $categories
	 * @return array $categories
	 */
	public function generateCategories( $data, $categories ) {
		wfProfileIn( __METHOD__ );

		$categories[] = 'Anime';
		$categories[] = 'Crunchyroll';
		$categories[] = $data['series'];
		$categories[] = 'Entertainment';
		if ( !empty( $data['season'] ) ) {
			$categories[] = $data['series'] . ': ' . $data['season'];
		}

		wfProfileOut( __METHOD__ );

		return $this->getUniqueArray( $categories );
	}

	/**
	 * generate metadata
	 * @param array $data
	 * @param string $errorMsg
	 * @return array|int $metadata or 0 on error
	 */
	public function generateMetadata( $data, &$errorMsg ) {
		$metadata = parent::generateMetadata( $data, $errorMsg );
		if ( empty( $metadata ) ) {
			return 0;
		}

		$metadata['videoUrl'] = empty( $data['videoUrl'] ) ? '' : $data['videoUrl'];

		return $metadata;
	}

	/**
	 * Converts the language code Crunchyroll uses to Wikia's
	 * @param string $crunchyLanguage
	 * @return null|string
	 */
	protected function convertLanguageCode( $crunchyLanguage ) {
		$crunchyLanguage = substr( $crunchyLanguage, 0, ( int ) strpos( $crunchyLanguage, '-' ) );
		return $this->getCldrCode( $crunchyLanguage, 'language', false );
	}

	/**
	 * Normalize subtitle language code Crunchyroll uses
	 * @param string $crunchySubtitles
	 * @return null|string
	 */
	protected function convertSubtitleLanguageCode( $crunchySubtitles ) {
		$wikiaLangs = [];
		$subs = array_unique( explode( ',', $crunchySubtitles ) );

		foreach ( $subs as $sub ) {
			$code = substr( $sub, 0, ( int ) strpos( $sub, ' ' ) );
			$wikiaLangs[] = $this->getCldrCode( $code, 'language', false );
		}

		return implode( ', ', $wikiaLangs );
	}

}