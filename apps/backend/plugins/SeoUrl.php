<?php

namespace Modules\Backend\Plugins;

class SeoUrl
{

	public function create($url)
	{

		$tr = array('ş', 'Ş', 'ı', 'I', 'İ', 'ğ', 'Ğ', 'ü', 'Ü', 'ö', 'Ö', 'Ç', 'ç', '(', ')', '/', ':', ',');
		$eng = array('s', 's', 'i', 'i', 'i', 'g', 'g', 'u', 'u', 'o', 'o', 'c', 'c', '', '', '-', '-', '');
		$url = str_replace($tr, $eng, $url);
		$url = strtolower($url);
		$url = preg_replace('/&amp;amp;amp;amp;amp;amp;amp;amp;amp;.+?;/', '', $url);
		$url = preg_replace('/\s+/', '-', $url);
		$url = preg_replace('|-+|', '-', $url);
		$url = preg_replace('/#/', '', $url);
		$url = str_replace('.', '', $url);
		$url = trim($url, '-');

		return $url;
	}

}