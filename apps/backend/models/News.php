<?php

namespace Modules\Backend\Models;

use Phalcon\Mvc\Model\Validator\PresenceOf,
	Phalcon\Mvc\Model\Validator\StringLength as StringLength;

class News extends \Phalcon\Mvc\Model
{

	/**
	 *
	 * @var integer
	 */
	public $id;

	/**
	 *
	 * @var string
	 */
	public $title;

	/**
	 *
	 * @var string
	 */
	public $content;

	/**
	 *
	 * @var string
	 */
	public $create_date;

	/**
	 *
	 * @var string
	 */
	public $photo;

	/**
	 *
	 * @var string
	 */
	public $seo_url;

	/**
	 *
	 * @var string
	 */
	public $status;

	/**
	 *
	 * @var string
	 */
	public $seq;

	/**
	 * Independent Column Mapping.
	 */
	public function columnMap()
	{
		return array(
			'id'          => 'id',
			'title'       => 'title',
			'content'     => 'content',
			'create_date' => 'create_date',
			'photo'       => 'photo',
			'seo_url'     => 'seo_url',
			'status'      => 'status',
			'seq'         => 'seq'
		);
	}

	public function setOrder()
	{
		if ($this->seq == "") {
			return $this->seq = "000";
		}
	}

	public function setPhoto($photo)
	{
		if ($photo != "") {
			return $this->photo = $photo;
		}

		return $this->photo;
	}

	public function validation()
	{

		$this->validate(new PresenceOf(array(
			"field"   => "title",
			"message" => "<strong>HATA</strong> Başlık boş olamaz"
		)));

		$this->validate(new StringLength(array(
			"field"          => "content",
			"min"            => 2,
			'messageMinimum' => "<strong>HATA</strong> İçerik çok kısa olamaz"
		)));

		$this->validate(new PresenceOf(array(
			"field"   => "content",
			"message" => "<strong>HATA</strong> İçerik boş olamaz"
		)));

		return $this->validationHasFailed() != TRUE;
	}
}