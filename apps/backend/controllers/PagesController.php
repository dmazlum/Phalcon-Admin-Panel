<?php

namespace Modules\Backend\Controllers;

use Modules\Backend\Models\Pages,
	Modules\Backend\Models\Modules;

class PagesController extends ControllerBase
{

	public function indexAction()
	{

	}

	public function categoryAction()
	{

		//Get Category Module
		$Module = Modules::find("status = '1'");

		if ($Module != FALSE) {
			$this->view->setVar("ListModule", $Module);
		}

		// Get category
		$Cat = Pages::find("page_id = 0 AND status = '1'");

		if ($Module != FALSE) {
			$this->view->setVar("ListCategories", $Cat);
		}
	}

	public function addAction()
	{

		$this->view->disable();

		$Add = new Pages();

		if ($this->request->isPost()) {

			$page_id = $this->request->getPost('page_id');

			if ($page_id == "") {
				$page_id = 0;
			} else {
				$page_id;
			}

			$Add->assign(array(
				"page_id"         => $page_id,
				"page_title"      => $this->request->getPost('page_title', 'striptags'),
				"page_content"    => $this->request->getPost('page_content', 'striptags'),
				"external_url"    => $this->request->getPost('external_url'),
				"seo_keywords"    => $this->request->getPost('seo_keywords', 'striptags'),
				"seo_description" => $this->request->getPost('seo_description', 'striptags'),
				"seo_url"         => $this->request->getPost('seo_url'),
				"language"        => "tr",
				"module_id"       => $this->request->getPost('module_id', 'int'),
				"created_date"    => date("Y.m.d H:i:s"),
				"seq"             => "000"
			));

			if (!$Add->save()) {
				return $this->flash->error($Add->getMessages());
			} else {
				return $this->flash->success('<strong>Başarılı</strong> Sayfa başarıyla eklenmiştir. <a href="/admin/pages/category">Yeniden eklemek için tıklayınız</a>');
			}
		}
	}
}