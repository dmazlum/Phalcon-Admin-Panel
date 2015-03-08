<?php

namespace Modules\Backend\Models;

class Roles extends \Phalcon\Mvc\Model
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
	public $role_name;

	/**
	 *
	 * @var integer
	 */
	public $role_id;

	/**
	 *
	 * @var string
	 */
	public $access_module;

	/**
	 *
	 * @var string
	 */
	public $status;

	/**
	 * Independent Column Mapping.
	 */
	public function columnMap()
	{
		return array(
			'id'            => 'id',
			'role_name'     => 'role_name',
			'role_id'       => 'role_id',
			'access_module' => 'access_module',
			'status'        => 'status'
		);
	}

}
