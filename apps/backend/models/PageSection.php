<?php

namespace Modules\Backend\Models;

class PageSection extends \Phalcon\Mvc\Model
{

	/**
	 *
	 * @var integer
	 */
	protected $id;

	/**
	 *
	 * @var integer
	 */
	protected $section_id;

	/**
	 *
	 * @var string
	 */
	protected $section_name;

	/**
	 *
	 * @var string
	 */
	protected $status;

	/**
	 * Method to set the value of field id
	 *
	 * @param integer $id
	 *
	 * @return $this
	 */
	public function setId($id)
	{
		$this->id = $id;

		return $this;
	}

	/**
	 * Method to set the value of field section_id
	 *
	 * @param integer $section_id
	 *
	 * @return $this
	 */
	public function setSectionId($section_id)
	{
		$this->section_id = $section_id;

		return $this;
	}

	/**
	 * Method to set the value of field section_name
	 *
	 * @param string $section_name
	 *
	 * @return $this
	 */
	public function setSectionName($section_name)
	{
		$this->section_name = $section_name;

		return $this;
	}

	/**
	 * Method to set the value of field status
	 *
	 * @param string $status
	 *
	 * @return $this
	 */
	public function setStatus($status)
	{
		$this->status = $status;

		return $this;
	}

	/**
	 * Returns the value of field id
	 *
	 * @return integer
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * Returns the value of field section_id
	 *
	 * @return integer
	 */
	public function getSectionId()
	{
		return rand(1,1500);
	}

	/**
	 * Returns the value of field section_name
	 *
	 * @return string
	 */
	public function getSectionName()
	{
		return $this->section_name;
	}

	/**
	 * Returns the value of field status
	 *
	 * @return string
	 */
	public function getStatus()
	{
		return $this->status;
	}

	/**
	 * Independent Column Mapping.
	 */
	public function columnMap()
	{
		return array(
			'id'           => 'id',
			'section_id'   => 'section_id',
			'section_name' => 'section_name',
			'status'       => 'status'
		);
	}

}
