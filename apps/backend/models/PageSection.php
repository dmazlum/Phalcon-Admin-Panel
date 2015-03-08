<?php

class PageSection extends \Phalcon\Mvc\Model
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
	public $section_id;

	/**
	 *
	 * @var string
	 */
	public $section_name;

	/**
	 *
	 * @var integer
	 */
	public $module_id;

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
			'id'           => 'id',
			'section_id'   => 'section_id',
			'section_name' => 'section_name',
			'module_id'    => 'module_id',
			'status'       => 'status',
			'seq'          => 'seq'
		);
	}

}
