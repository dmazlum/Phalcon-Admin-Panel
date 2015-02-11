<?php

namespace Multiple\Backend\Controllers;

/**
 * Add Your Models
 */
use Multiple\Backend\Models\Modules as Modules;

class ControlpanelController extends ControllerBase
{

    public function indexAction()
    {

    }

    public function modulesAction() {

        $modules = Modules::find(array("order" => "id"));

        if ($modules != false) {
            $this->view->setVar("modules", $modules);
        }

    }

}