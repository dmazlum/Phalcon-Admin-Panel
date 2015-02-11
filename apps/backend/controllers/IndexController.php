<?php

namespace Multiple\Backend\Controllers;

class IndexController extends ControllerBase
{

	public function indexAction()
	{
		return $this->_forward('/login');
	}

}