<?php

namespace Modules\Backend\Models;

class Contact extends \Phalcon\Mvc\Model
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
	public $company;

	/**
	 *
	 * @var string
	 */
	public $address;

	/**
	 *
	 * @var string
	 */
	public $phone;

	/**
	 *
	 * @var string
	 */
	public $phone2;

	/**
	 *
	 * @var string
	 */
	public $mobile;

	/**
	 *
	 * @var string
	 */
	public $fax;

	/**
	 *
	 * @var string
	 */
	public $web;

	/**
	 *
	 * @var string
	 */
	public $email;


	/**
	 * Independent Column Mapping.
	 */
	public function columnMap()
	{
		return array(
			'id'      => 'id',
			'company' => 'company',
			'address' => 'address',
			'phone'   => 'phone',
			'phone2'  => 'phone2',
			'mobile'  => 'mobile',
			'fax'     => 'fax',
			'web'     => 'web',
			'email'   => 'email'
		);
	}

}
