<?php

namespace Modules\Backend\Models;

use Phalcon\Mvc\Model\Validator\PresenceOf,
	Phalcon\Mvc\Model\Validator\StringLength as StringLength;

class Pages extends \Phalcon\Mvc\Model
{

	/**
	 *
	 * @var integer
	 */
	public $id;

	/**
	 *
	 * @var integer
	 */
	public $page_id;

	/**
	 *
	 * @var string
	 */
	public $page_title;

	/**
	 *
	 * @var string
	 */
	public $page_content;

	/**
	 *
	 * @var string
	 */
	public $external_url;

	/**
	 *
	 * @var string
	 */
	public $seo_keywords;

	/**
	 *
	 * @var string
	 */
	public $seo_description;

	/**
	 *
	 * @var string
	 */
	public $seo_url;

	/**
	 *
	 * @var string
	 */
	public $language;

	/**
	 *
	 * @var integer
	 */
	public $module_id;

	/**
	 *
	 * @var string
	 */
	public $created_date;

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
			'id'              => 'id',
			'page_id'         => 'page_id',
			'page_title'      => 'page_title',
			'page_content'    => 'page_content',
			'external_url'    => 'external_url',
			'seo_keywords'    => 'seo_keywords',
			'seo_description' => 'seo_description',
			'seo_url'         => 'seo_url',
			'language'        => 'language',
			'module_id'       => 'module_id',
			'created_date'    => 'created_date',
			'status'          => 'status',
			'seq'             => 'seq'
		);
	}

	/**
	 * Get Categories Sub Tree
	 *
	 * @return bool|\Phalcon\Mvc\Model\ResultsetInterface
	 */
	public function getChilds()
	{
		$result = FALSE;

		if ($this->id) {
			$childs = self::find("page_id = $this->id");
			if (count($childs)) {
				$result = $childs;
			}
		}

		return $result;
	}

	/**
	 * Validation Function
	 *
	 * @return bool
	 */
	public function validation()
	{

		$this->validate(new PresenceOf(array(
			"field"   => "page_title",
			"message" => "<strong>HATA</strong> Sayfa başlığı boş olamaz"
		)));

		$this->validate(new PresenceOf(array(
			"field"   => "page_content",
			"message" => "<strong>HATA</strong> Sayfa içeriği boş olamaz"
		)));

		$this->validate(new StringLength(array(
			"field"          => "page_title",
			"min"            => 2,
			'messageMinimum' => "<strong>HATA</strong> Sayfa başlığı çok kısa olamaz"
		)));

		return $this->validationHasFailed() != TRUE;
	}

}
