<?php

namespace Multiple\Backend\Controllers;

use Multiple\Backend\Models\Modules as Modules;

class ControllerBase extends \Phalcon\Mvc\Controller
{

    public function initialize() {

        $Mod = Modules::find("status = 1");

        if ($Mod != false) {
            $this->view->setVar("ActiveModules", $Mod);
        }
    }

}