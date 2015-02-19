<?php

namespace Modules\Backend\Controllers;

use Modules\Backend\Models\Modules as Modules;

class ControllerBase extends \Phalcon\Mvc\Controller
{
	public function initialize()
    {

        $Mod = Modules::find("status = 1");

        if ($Mod != false) {
            $this->view->setVar("ActiveModules", $Mod);
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