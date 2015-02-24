<?php

namespace Modules\Backend\Models;

class Users extends \Phalcon\Mvc\Model
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
	public $name_surname;

	/**
	 *
	 * @var string
	 */
	public $username;

	/**
	 *
	 * @var string
	 */
	public $password;

	/**
	 *
	 * @var string
	 */
	public $created_date;

	/**
	 *
	 * @var string
	 */
	public $role;

	/**
	 *
	 * @var string
	 */
	public $last_login;

	/**
	 *
	 * @var string
	 */
	public $ip_add;

	/**
	 *
	 * @var string
	 */
	public $status;

	/**
	 * Independent Column Mapping.
	 */
	public function columnMap ()
	{
		return array(
			'id' => 'id',
			'name_surname' => 'name_surname',
			'username' => 'username',
			'password' => 'password',
			'created_date' => 'created_date',
			'role' => 'role',
			'last_login' => 'last_login',
			'ip_add' => 'ip_add',
			'status' => 'status'
		);
	}

}
