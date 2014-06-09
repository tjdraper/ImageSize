<?php
class Plugin_imagesize extends Plugin
{
	var $meta = array(
		'name' => 'Image Size',
		'version' => '1.0.2',
		'author' => 'TJ Draper',
		'author_url' => 'http://buzzingpixel.com'
	);

	public function index()
	{
		// Params
		$path = $this->fetchParam('path');
		$type = $this->fetchParam('type'); // width or height
		$divide = (int)$this->fetchParam('divide');
		$parse_path = $this->fetchParam('parse_path');

		// Find out if we need to parse a plugin in the path parameter
		if ($parse_path == 'yes') {
			$path = Parse::template('{' . $path . '}', array());
		}

		// Make sure path and type params have been set
		if ($path != '' AND $type != '') {
			$fullPath = ($_SERVER['DOCUMENT_ROOT'] . $path);

			// Make sure the path to the file is valid first
			if (file_exists($fullPath)) {
				list($width, $height) = getimagesize($fullPath);

				if ($divide != '') {
					$width = ($width / $divide);
					$height = ($height / $divide);
				}

				// Determine if width or height
				if ($type == 'height') {
					return $height;
				} elseif ($type == 'width') {
					return $width;
				} else {
					return 'incorrect type param';
				}
			// Return incorrect path if the path is not valid
			} else {
				return 'incorrect path';
			}
		// If path and type params have not been set, return an error
		} else {
			return 'missing parameter';
		}
	}
}
