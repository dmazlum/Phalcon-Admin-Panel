<?php

namespace Modules\Backend\Controllers;

use Modules\Backend\Models\Modules as Modules;

class ControlpanelController extends ControllerBase
{

	public function indexAction()
	{

	}

	public function modulesAction($action)
	{

		$modules = Modules::find(array("order" => "id"));

		if ($modules != FALSE) {
			$this->view->setVar("modules", $modules);
		}

		//Module Actions
		if ($action == "disable") {

			$query = $this->db->update("modules",
				array("status"),
				array("0"),
				"id=" . $this->request->getPost('id')
			);

			if ($query) {
				return $this->flash->success('Modül Güncellendi');
			} else {
				return $this->flash->error('Modül Güncellenemedi');
			}
		}

		if ($action == "enable") {

			$query = $this->db->update("modules",
				array("status"),
				array("1"),
				"id=" . $this->request->getPost('id')
			);

			if ($query) {
				return $this->flash->success('Modül Güncellendi');
			} else {
				return $this->flash->error('Modül Güncellenemedi');
			}
		}

	}

}