<?php

namespace Modules\Backend\Models;

class Module_menu extends \Phalcon\Mvc\Model
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
	public $menu_fieldname;

	/**
	 *
	 * @var string
	 */
	public $menu_url;

	/**
	 *
	 * @var string
	 */
	public $module_id;


	/**
	 * Independent Column Mapping.
	 */
	public function columnMap()
	{
		return array(
			'id'             => 'id',
			'menu_fieldname' => 'menu_fieldname',
			'menu_url'       => 'menu_url',
			'module_id'      => 'module_id',
		);
	}

}
