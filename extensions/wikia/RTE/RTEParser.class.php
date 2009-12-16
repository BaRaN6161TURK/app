<?php

class RTEParser extends Parser {

	// count empty lines before HTML tag
	private $emptyLinesBefore = 0;

	// used in tweaked doBlockLevels()
	private $lastLine = null;

	// image params grabed in ParserMakeImageParams hook to be used in makeImage
	private static $imageParams = null;

	// place to store data of rendered image placeholder to be returned by makeImage()
	private static $mediaPlaceholder = null;

	// last wikitext parsed by makeImage()
	private static $lastWikitext = null;

	/*
	 * Find empty lines in wikitext and mark following element
	 */
	function doBlockLevelsLineStart(&$oLine, &$output) {
		RTE::log(__METHOD__, $oLine);

		// check if previous line was empty
		if ( ($this->lastLine !== null) && ($this->lastLine == '') ) {
			// increase empty lines counter
			$this->emptyLinesBefore++;
		}

		// current line is not empty and we have empty lines before
		if ( ($oLine != '') && ($this->emptyLinesBefore > 0) ) {
			// add special comment with empty lines counter
			$output .= RTEReverseParser::addEmptyLinesBeforeComment($this->emptyLinesBefore);
		}

		// mark <th> and <td> nodes generated by "short" table wikimarkup (using || and !!)
		$oLine = preg_replace('%(?<!^)</t[dh]\><t[dh]%s', '\0 _rte_short_row_markup="true"', $oLine);

		// mark wasHTML elements starting the line of wikitext
		$oLine = preg_replace('/^<([^>]+_rte_washtml="true")/', '<$1 _rte_line_start="true"', $oLine);
	}

	/**
	 * Reset empty lines counter and store current line as previous one for next step of foreach
	 */
	function doBlockLevelsLineEnd(&$oLine, &$output) {
		// reset empty lines counte
		if ( (rtrim($oLine) != '') && ($this->emptyLinesBefore > 0) ) {
			//RTE::log(__METHOD__, "resetting empty lines counter ({$this->emptyLinesBefore})");

			$this->emptyLinesBefore = 0;
		}

		// store current line as previous for next check
		$this->lastLine = $oLine;
	}

	/**
	 * Parse headers and return html
	 *
	 * Don't remove whitespaces following header
	 */
	function doHeadings($text) {
		wfProfileIn(__METHOD__);
		for ( $i = 6; $i >= 1; --$i ) {
			$h = str_repeat( '=', $i );
			$text = preg_replace( "/^$h(.+)$h(\\s*)$/m",
				"<h$i>\\1</h$i>\\2", $text );
		}
		wfProfileOut(__METHOD__);
		return $text;
	}

	/**
	 * Parse image options text and use it to make an image
	 * @param Title $title
	 * @param string $options
	 * @param LinkHolderArray $holders
	 * @param int $wikitextIdx
	 */
	function makeImage($title, $options, $holders = false) {
		wfProfileIn(__METHOD__);

		$wikitextIdx = RTEMarker::getDataIdx(RTEMarker::IMAGE_DATA, $options);

		// store wikitext for media placeholder rendering method
		self::$lastWikitext = RTEData::get('wikitext', $wikitextIdx);

		// call MW parser - image params will be populated
		parent::makeImage($title, $options, $holders);

		// maybe it's an image placeholder
		global $wgEnableImagePlaceholderExt;
		if (!empty($wgEnableImagePlaceholderExt)) {
			$isImagePlaceholder = ImagePlaceholderIsPlaceholder($title->getText());

			// pass rendered image placeholder
			if ($isImagePlaceholder) {
				// return HTML stored by renderMediaPlaceholder() method
				$ret = self::$mediaPlaceholder;

				wfProfileOut(__METHOD__);
				return $ret;
			}
		}

		// check that given image exists
		$image = wfFindFile($title);
		$isBrokenImage = empty($image);

		// render broken image placeholder
		if ($isBrokenImage) {
			// handle not existing images
			$sk = $this->mOptions->getSkin();

			$ret = $sk->makeBrokenImageLinkObj($title, '', '', '', '', false, $wikitextIdx);
			return $ret;
		}

		// get image params
		$params = self::$imageParams;

		// generate image data
		$data = array(
			'type' => 'image',
			'wikitext' => RTEData::get('wikitext', $wikitextIdx),
			'title' => $title->getDBkey(),
			'params' => array_merge($params['frame'], $params['handler']),
		);

		if(strpos($data['wikitext'] , "\x7f") !== false || strpos($data['wikitext'], '_rte_wikitextidx') !== false || strpos($data['wikitext'], '_rte_dataidx') !== false) {
			RTE::$edgeCases[] = 'COMPLEX.09';
		}

		// small fix: set value of thumbnail entry
		if (isset($data['params']['thumbnail'])) {
			$data['params']['thumbnail'] = true;
		}

		// keep caption only for thumbs and framed images
		if (!isset($data['params']['thumbnail']) && !isset($data['params']['framed'])) {
			$data['params']['caption'] = '';
		}

		// get "unparsed" caption from original wikitext
		if ($data['params']['caption'] != '') {
			$wikitext = trim($data['wikitext'], '[]');
			$wikitextParts = explode('|', $wikitext);

			// let's assume caption is the last part of image wikitext
			$originalCaption = end($wikitextParts);
			$originalCaption = htmlspecialchars_decode($originalCaption);

			// keep parsed caption and store its wikitext
			$data['params']['captionParsed'] = $data['params']['caption'];
			$data['params']['caption'] = $originalCaption;
		}

		RTE::log(__METHOD__, $data);

		// image width
		if (!empty($data['params']['width'])) {
			// width provided in wikitext
			$width = $data['params']['width'];
		}
		else if (isset($data['params']['thumbnail'])) {
			// width not provided - get default for thumbs
			global $wgUser, $wgThumbLimits;
			$wopt = $wgUser->getOption('thumbsize');

			if(!isset($wgThumbLimits[$wopt])) {
				$wopt = User::getDefaultOption('thumbsize');
			}

			$width = $wgThumbLimits[$wopt];

			// thumbed images should not be resized larger than the original file resolution
			$imageWidth = $image->getWidth();
			if ($imageWidth < $width) {
				$width = $imageWidth;
			}
		}
		else {
			// full size
			$width = $image->getWidth();
		}

		// add extra CSS classes
		$imgClass = array('image');

		if (isset($data['params']['thumbnail'])) {
			$imgClass[] = 'thumb';
		}
		if (isset($data['params']['framed'])) {
			$imgClass[] = 'frame';
		}
		if (isset($data['params']['frameless'])) {
			$imgClass[] = 'frameless';
		}
		if (isset($data['params']['border'])) {
			$imgClass[] = 'border';
		}

		if (isset($data['params']['align'])) {
			$imgClass[] = 'align' . ucfirst($data['params']['align']);
		}
		if ($data['params']['caption'] != '') {
			$imgClass[] = 'withCaption';
		}

		// generate image thumbnail
		$thumb = $image->transform( array('width' => $width) );
		$thumbClass = get_class($thumb);

		// RT #25329
		if ($thumbClass == 'OggAudioDisplay') {
			$data['type'] = 'ogg-file';
			$ret = RTEMarker::generate(RTEMarker::PLACEHOLDER, RTEData::put('placeholder', $data));

			wfProfileOut(__METHOD__);

			return $ret;
		}

		$ret = $thumb->toHtml( array('img-class' => implode(' ', $imgClass)) );

		// add type attribute
		$ret = substr($ret, 0, -2). ' type="image" />';

		RTE::log(__METHOD__, $ret);

		// store data and mark HTML
		$ret = RTEData::addIdxToTag(RTEData::put('data', $data), $ret);

		wfProfileOut(__METHOD__);

		return $ret;
	}

	/**
	 * Render media (image / video) placeholder
	 */
	static public function renderMediaPlaceholder($data) {
		wfProfileIn(__METHOD__);

		$attribs = array(
			'src' => 'http://images.wikia.com/common/skins/monobook/blank.gif?1',
			'class' => "media-placeholder {$data['type']}",
			'type' => $data['type'],
			'height' => intval($data['params']['height']),
			'width' => intval($data['params']['width']),
		);

		if (!empty($data['params']['isThumb'])) {
			$attribs['class'] .= ' thumb';
		}

		// set original wikitext of none provided (used by ImagePlaceholder)
		if (!isset($data['wikitext'])) {
			$data['wikitext'] = self::$lastWikitext;
		}

		// render image for media placeholder
		$ret = Xml::element('img', $attribs);

		// store data and mark HTML
		$dataIdx = RTEData::put('data', $data);
		$ret = RTEData::addIdxToTag($dataIdx, $ret);

		// store marked HTML to be used by makeImage() method
		self::$mediaPlaceholder = $ret;

		RTE::log(__METHOD__, $data['wikitext']);

		wfProfileOut(__METHOD__);

		return $ret;
	}

	/**
	 * Handle ParserMakeImageParams hook (get parsed image options)
	 */
	static public function makeImageParams($title, $file, &$params) {
		// run only when parsing for RTE
		global $wgRTEParserEnabled;
		if (empty($wgRTEParserEnabled)) {
			return true;
		}

		// store image params (to be used in makeImage)
		self::$imageParams = $params;

		return true;
	}

	/**
	 * make an image if it's allowed, either through the global
	 * option, through the exception, or through the on-wiki whitelist
	 * @private
	 */
	function maybeMakeExternalImage( $url ) {
		wfProfileIn(__METHOD__);

		$text = parent::maybeMakeExternalImage($url);

		// MW parser has rendered an external whitelisted image
		if ($text !== false) {
			RTE::log(__METHOD__, $url);

			// mark rendered image with RTE marker
			$data = array(
				'type' => 'image-whitelisted',
				'wikitext' => $url,
			);

			$text = RTEData::addIdxToTag(RTEData::put('data', $data), $text);
		}

		wfProfileOut(__METHOD__);

		return $text;
	}

	/**
	 * Convert wikitext to HTML and add extra HTML attributes for RTE
	 *
	 * @param $text String: text we want to parse
	 * @param $title A title object
	 * @param $options ParserOptions
	 * @param $linestart boolean
	 * @param $clearState boolean
	 * @param $revid Int: number to pass in {{REVISIONID}}
	 * @return ParserOutput a ParserOutput
	 */
	public function parse( $text, Title $title, ParserOptions $options, $linestart = true, $clearState = true, $revid = null ) {
		wfProfileIn(__METHOD__);

		// get rid of all \r in wikitext
		$text = str_replace("\r\n", "\n", $text);

		// count newlines at the beginning of the wikitext
		$emptyLinesAtStart = strspn($text, "\n");

		if ($emptyLinesAtStart > 0) {
			 // don't double count empty lines at the beginning of wikitext
			$this->emptyLinesBefore = $emptyLinesAtStart * -1;
		}

		// protect HTML entities from wikitext inside \x7f "placeholders" (&amp; &#58; &#x5f;)
		$text = preg_replace('%&(#?[\w\d]+);%s', "\x7f-ENTITY-\\1-\x7f", $text);

		// set flag indicating parsing for CK
		global $wgRTEParserEnabled;
		$wgRTEParserEnabled = true;

		// don't use XML cache in preprocessor
		global $wgPreprocessorCacheThreshold;
		$wgPreprocessorCacheThreshold = 1000000;

		//RTE::log(__METHOD__ . '::beforeParse', $text);

		// parse to HTML
		$output = parent::parse($text, $title, $options, $linestart, $clearState, $revid);

		$wgRTEParserEnabled = false;

		// add extra RTE attributes to HTML elements (for correct handling of spaces and newlines when parsing back to wikitext)
		$html = $output->getText();

		// add RTE_EMPTY_LINES_BEFORE comment
		if ($emptyLinesAtStart > 0) {
			$html = RTEReverseParser::addEmptyLinesBeforeComment($emptyLinesAtStart) . $html;
		}

		//RTE::log(__METHOD__ . '::beforeReplace', $html);

		// wrap HTML entities inside span "placeholders" (&amp; &#58; &#x5f;)
		$html = preg_replace("%\x7f-ENTITY-(#?[\w\d]+)-\x7f%", '<span _rte_entity="\1">&\1;</span>', $html);

		// move empty lines counter data from comment to next opening tag attribute (thx to Marooned)
		$html = preg_replace('%<!-- RTE_EMPTY_LINES_BEFORE_(\d+) -->(?!<!)(.*?)(<[^/][^>]*)>%s', '\2\3 _rte_empty_lines_before="\1">', $html);

		// remove not replaced EMPTY_LINES_BEFORE comments
		$html = preg_replace('%<!-- RTE_EMPTY_LINES_BEFORE_(\d+) -->%s', '', $html);

		// add _rte_spaces_before for list items and table cells
		$html = preg_replace_callback("/<(li|dd|dt|td|th)([^>]*)>(\x20+)/",
			create_function('$matches','return "<" . $matches[1] . $matches[2] . " _rte_spaces_before=\"".strlen($matches[3])."\">";'), $html);

		// replace placeholder markers with placeholders
		$html = preg_replace_callback("/\x7f-01-(\d{4})/", 'RTE::replacePlaceholder', $html);

		// replace dataidx attribute with _rte_data attribute storing JSON encoded meta data
		$html = preg_replace_callback('/ _rte_dataidx="(\d{4})" /', 'RTEData::replaceIdxByData', $html);

		$html = preg_replace("/\x7f-(?:".RTEMarker::INTERNAL_WIKITEXT."|".RTEMarker::EXTERNAL_WIKITEXT.")-\d{4}/", '', $html);

		// add extra attribute for p tags coming from parser
		$html = strtr($html, array('<p>' => '<p _rte_fromparser="true">', '<p ' => '<p _rte_fromparser="true" '));

		// add empty paragraph for new / empty pages
		if ($html == '') {
			$html = Xml::element('p');
		}

		// update parser output
		RTE::log(__METHOD__, $html);
		$output->setText($html);

		wfProfileOut(__METHOD__);

		return $output;
	}

	public function makeKnownLinkHolder( $nt, $text = '', $query = '', $trail = '', $prefix = '' ) {
		$dataIdx = RTEMarker::getDataIdx(RTEMarker::INTERNAL_DATA, $text);
		$ret = parent::makeKnownLinkHolder($nt, $text, $query, $trail, $prefix);
		return RTEData::addIdxToTag($dataIdx, $ret);
	}

	public function doDoubleUnderscore( $text ) {
		$mwa = MagicWord::getDoubleUnderscoreArray();
		$regexes = $mwa->getRegex();
		foreach($regexes as $regex) {
			if($regex === '') continue;
			$text = preg_replace_callback($regex, 'RTEParser::doDoubleUnderscoreReplace', $text);
		}
		return $text;
	}

	public static function doDoubleUnderscoreReplace($matches) {
		$dataIdx = RTEData::put('placeholder', array('type' => 'double-underscore', 'wikitext' => $matches[0]));
		return RTEMarker::generate(RTEMarker::PLACEHOLDER, $dataIdx);
	}

	public function getStripList() {
		return array_merge(parent::getStripList(), array('noinclude', 'includeonly', 'onlyinclude', 'references'));

	}
}
