<?php

namespace Modules\Backend\Models;

use Phalcon\Mvc\Model\Validator\PresenceOf,
	Phalcon\Mvc\Model\Validator\StringLength as StringLength,
	Phalcon\Mvc\Model\Validator\Uniqueness;

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
	protected $password;

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
	public function columnMap()
	{
		return array(
			'id'           => 'id',
			'name_surname' => 'name_surname',
			'username'     => 'username',
			'password'     => 'password',
			'created_date' => 'created_date',
			'role'         => 'role',
			'last_login'   => 'last_login',
			'ip_add'       => 'ip_add',
			'status'       => 'status'
		);
	}

	public function setPassword($password)
	{

		if ($password != "") {
			return $this->password = sha1($password);
		}

		return $this->password;
	}

	public function validation()
	{

		$this->validate(new Uniqueness(array(
			"field"   => "username",
			"message" => "Bu kullanıcı sistemde zaten kayıtlıdır."
		)));

		$this->validate(new PresenceOf(array(
			"field"   => "username",
			"message" => "<strong>HATA</strong> Kullanıcı adı boş olamaz"
		)));

		$this->validate(new PresenceOf(array(
			"field"   => "password",
			"message" => "<strong>HATA</strong> Şifreniz boş olamaz"
		)));

		$this->validate(new StringLength(array(
			"field"          => "password",
			"min"            => 2,
			'messageMinimum' => "<strong>HATA</strong> Şifreniz çok kısa olamaz"
		)));

		$this->validate(new PresenceOf(array(
			"field"   => "role",
			"message" => "<strong>HATA</strong> Kullanıcı türü boş olamaz"
		)));

		return $this->validationHasFailed() != TRUE;
	}
}
