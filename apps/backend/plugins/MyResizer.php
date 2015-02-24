<?php

namespace Modules\Backend\Plugins;

use Phalcon\Image;

class MyResizer extends Image
{

	/**
	 * @param string $source     Photo Filename
	 * @param string $dest       Where is your Photo? If you want to save new photo please leave NULL
	 * @param int    $new_width  Photo With
	 * @param int    $new_height Photo Height
	 * @param int    $quality    Quality of photo
	 */
	public function resize($source, $dest, $new_width, $new_height, $quality)
	{

		$ImageField = $source;

		$image = new \Phalcon\Image\Adapter\Gd($source);

		$source_height = $ImageField->getHeight();
		$source_width = $ImageField->getWidth();

		$source_aspect_ratio = $source_width / $source_height;
		$desired_aspect_ratio = $new_width / $new_height;

		if ($source_aspect_ratio > $desired_aspect_ratio) {
			$temp_height = $new_height;
			$temp_width = ( int )($new_height * $source_aspect_ratio);
		} else {
			$temp_width = $new_width;
			$temp_height = ( int )($new_width / $source_aspect_ratio);
		}

		$x0 = ($temp_width - $new_width) / 2;
		$y0 = ($temp_height - $new_height) / 2;

		$image->resize($temp_width, $temp_height)->crop($new_width, $new_height, $x0, $y0);
		$image->save($dest, $quality);
	}
}
