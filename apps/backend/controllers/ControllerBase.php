<?php

namespace Modules\Backend\Controllers;

use Modules\Backend\Models\Modules as Modules;

class ControllerBase extends \Phalcon\Mvc\Controller
{
	public function initialize()
	{

		$AllModules = Modules::find(array("status = 1"));

		$ModuleLinks = $this->modelsManager->createBuilder()
			->columns('m.module_file,
					md.menu_fieldname,
					md.module_id,
					md.menu_url')
			->addFrom('\Modules\Backend\Models\Modules', 'm')
			->innerJoin('\Modules\Backend\Models\Module_menu', 'm.module_id = md.module_id', 'md')
			->where('m.status = "1"')
			->getQuery()
			->execute();

		if ($AllModules != FALSE) {
			$this->view->setVar("ActiveModules", $AllModules);
			$this->view->setVar("ModuleLinks", $ModuleLinks);
		}

		//Get URL Path
		$pagingUrl = str_replace($_SERVER["SCRIPT_NAME"], '', $_SERVER["REQUEST_URI"]);
		$pagingUrl = explode('/', $pagingUrl);

		if (@$pagingUrl[4] == "") {
			$pagingUrl[4] = NULL;
		}

		$this->view->setVar('pagingUrl', $pagingUrl);
	}
}