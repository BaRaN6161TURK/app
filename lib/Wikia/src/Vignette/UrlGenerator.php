<?php
/**
 * UrlGenerator
 *
 * @author Nelson Monterroso <nelson@wikia-inc.com>
 */

namespace Wikia\Vignette;

use Wikia\Logger\Loggable;

class UrlGenerator {
	use Loggable;

	const MODE_ORIGINAL = 'original';
	const MODE_THUMBNAIL = 'thumbnail';
	const MODE_THUMBNAIL_DOWN = 'thumbnail-down';
	const MODE_FIXED_ASPECT_RATIO = 'fixed-aspect-ratio';
	const MODE_ZOOM_CROP = 'zoom-crop';
	const MODE_ZOOM_CROP_DOWN = 'zoom-crop-down';
	const MODE_REORIENT = 'reorient';

	const REVISION_LATEST = 'latest';

	/** @var string mode of the image we're requesting */
	private $mode = self::MODE_ORIGINAL;

	/** @var string revision of the image we're requesting */
	private $revision = self::REVISION_LATEST;

	/** @var int width of the image, in pixels */
	private $width = 100;

	/** @var int height of the image, in pixels */
	private $height = 100;

	/** @var FileInterface file object we're requesting */
	private $file;

	/** @var array hash of query parameters to send to the thumbnailer */
	private $query = [];

	public function __construct(FileInterface $file) {
		$this->file = $file;
		$this->original();
	}

	/**
	 * use the thumbnailer in a specific mode
	 *
	 * @param string $mode one of the MODE_ constants defined above
	 * @return $this
	 * @throws \InvalidArgumentException
	 */
	public function mode($mode) {
		if (!in_array($mode, self::validModes())) {
			$this->error("invalid mode", [
				"mode" => $mode,
			]);
			throw new \InvalidArgumentException($mode);
		}

		$this->mode = $mode;
		return $this;
	}

	public function width($width) {
		$this->width = $width;
		return $this;
	}

	public function height($height) {
		$this->height = $height;
		return $this;
	}

	/**
	 * Request a specific revision of an image
	 * @param string $revision
	 * @return $this
	 */
	public function revision($revision) {
		$this->revision = $revision;
		return $this;
	}

	/**
	 * Fill the background with a specific color, instead of white
	 * @param string $color color accepted by ImageMagick (http://www.imagemagick.org/script/color.php), or a hex code.
	 * This only applies when $this->mode = self::MODE_FIXED_ASPECT_RATIO
	 * @return $this
	 */
	public function backgroundFill($color) {
		$this->query['fill'] = $color;
		return $this;
	}

	/**
	 * original image
	 * @return $this
	 */
	public function original() {
		$this->mode(self::MODE_ORIGINAL);
		return $this;
	}

	/**
	 * reorient the image
	 * @return $this
	 */
	public function reorient() {
		$this->mode(self::MODE_REORIENT);
		return $this;
	}

	/**
	 * create a new thumbnail that is allowed to be bigger than the original
	 * @return $this
	 */
	public function thumbnail() {
		$this->mode(self::MODE_THUMBNAIL);
		return $this;
	}

	/**
	 * create a new thumbnail that is not allowed to be bigger than the original
	 * @return $this
	 */
	public function thumbnailDown() {
		$this->mode(self::MODE_THUMBNAIL_DOWN);
		return $this;
	}

	/**
	 * zoom crop, allowed to be bigger than the original
	 * @return $this
	 */
	public function zoomCrop() {
		$this->mode(self::MODE_ZOOM_CROP);
		return $this;
	}

	/**
	 * zoom crop, not allowed to be bigger than the original
	 * @return $this
	 */
	public function zoomCropDown() {
		$this->mode(self::MODE_ZOOM_CROP_DOWN);
		return $this;
	}

	/**
	 * return an image that is exactly $this->width x $this->height with the source image centered vertically
	 * or horizontally (depending on which side is longer). The background is filled with the value passed to
	 * $this->backgroundFill(), or white if no background value is specified.
	 *
	 * @return $this
	 */
	public function fixedAspectRatio() {
		$this->mode(self::MODE_FIXED_ASPECT_RATIO);
		return $this;
	}

	/**
	 * get url for thumbnail/image that's been built up so far
	 * @return string
	 * @throws \Exception
	 */
	public function url() {
		global $wgVignetteUrl;

		$bucketPath = self::bucketPath();
		$url = "{$wgVignetteUrl}/{$bucketPath}/{$this->file->getRel()}/revision/{$this->revision}/width/{$this->width}/height/{$this->height}";

		if ($this->revision == self::REVISION_LATEST) {
			$this->query['cb'] = $this->file->getTimestamp();
		}

		if (!empty($this->query)) {
			$url .= '?'.implode('&', array_map(function($key, $val) {
					return "{$key}=".urlencode($val);
				}, array_keys($this->query), $this->query));
		}

		return $url;
	}

	public function __toString() {
		return $this->url();
	}

	protected function getLoggerContext() {
		return [
			'file' => $this->file->getName(),
		];
	}

	/**
	 * get the top level bucket for a given wiki. this may or may not be the same as $wgDBName. This is done via
	 * regular expression because there is no variable that contains the bucket name :(
	 * @return mixed
	 */
	private static function bucketPath() {
		global $wgUploadPath;
		preg_match('/http(s?):\/\/(.*?)\/(.*?)\/(.*)$/', $wgUploadPath, $matches);
		return $matches[3];
	}

	private static function validModes() {
		return [
			self::MODE_ORIGINAL,
			self::MODE_THUMBNAIL,
			self::MODE_THUMBNAIL_DOWN,
			self::MODE_FIXED_ASPECT_RATIO,
			self::MODE_ZOOM_CROP,
			self::MODE_ZOOM_CROP_DOWN,
			self::MODE_REORIENT,
		];
	}
}
