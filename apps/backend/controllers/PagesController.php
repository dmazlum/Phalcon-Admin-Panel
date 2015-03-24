<?php

namespace Modules\Backend\Controllers;

use Modules\Backend\Models\Pages,
	Modules\Backend\Models\Modules;

class PagesController extends ControllerBase
{

	/**
	 * Edit Link for Pages
	 *
	 * @param string $action
	 * @param int    $id
	 */
	public function indexAction($action = NULL, $id = NULL)
	{

		if ($action == "edit") {

			$Edit = Pages::find("id=" . $id);

			if ($Edit != FALSE) {
				$this->view->setVar("UpdatePages", $Edit);
			}
		}

		// Get Pages
		$Cat = Pages::find(array('order' => 'page_id'));

		if ($Cat != FALSE) {
			$this->view->setVar("ListPages", $Cat);
		}

		//Get Category Module
		$Module = Modules::find("status = '1'");

		if ($Module != FALSE) {
			$this->view->setVar("ListModule", $Module);
		}

		// Get category
		$Cat2 = Pages::find(array("order" => "seq", "page_id = 0 AND status = '1'"));

		if ($Cat2 != FALSE) {
			$this->view->setVar("ListCategories", $Cat2);
		}
	}

	/**
	 * Add Pages with category
	 */
	public function categoryAction()
	{

		//Get Category Module
		$Module = Modules::find("status = '1'");

		if ($Module != FALSE) {
			$this->view->setVar("ListModule", $Module);
		}

		// Get category
		$Cat = Pages::find(array("order" => "seq", "page_id ='0' AND status = '1'"));

		if ($Cat != FALSE) {
			$this->view->setVar("ListCategories", $Cat);
		}
	}

	/**
	 * Add Page
	 * @return string
	 */
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
				"page_content"    => $this->request->getPost('page_content'),
				"external_url"    => $this->request->getPost('external_url'),
				"seo_keywords"    => $this->request->getPost('seo_keywords', 'striptags'),
				"seo_description" => $this->request->getPost('seo_description', 'striptags'),
				"seo_url"         => $this->request->getPost('seo_url'),
				"language"        => "tr",
				"module_id"       => $this->request->getPost('module_id', 'int'),
				"created_date"    => date("Y.m.d H:i:s"),
				"status"          => 1,
				"seq"             => "000"
			));

			if (!$Add->save()) {
				return $this->flash->error($Add->getMessages());
			} else {
				return $this->flash->success('<strong>Başarılı</strong> Sayfa başarıyla eklenmiştir. <a href="/admin/pages/category">Yeniden eklemek için tıklayınız</a>');
			}
		}
	}

	/**
	 * Update Pages
	 *
	 * @param int $id
	 *
	 * @return string
	 */
	public function updateAction($id)
	{

		$this->view->disable();

		$Update = Pages::findFirstById($id);

		if (!$Update) {
			$this->flash->error("Düzenlenecek Sayfa bulunamadı");
		}

		if ($this->request->isPost()) {

			//Control Page ID
			if ($Update->page_id == '0') {
				$page_id = 0;
			} elseif ($id == $this->request->getPost('page_id', 'int')) {
				$page_id = $Update->page_id;
			} else {
				$page_id = $this->request->getPost('page_id', 'int');
			}

			/*	$Update->assign(array(
					"page_id"         => $page_id,
					"page_title"      => $this->request->getPost('page_title', 'striptags'),
					"page_content"    => $this->request->getPost('page_content'),
					"external_url"    => $this->request->getPost('external_url'),
					"seo_keywords"    => $this->request->getPost('seo_keywords', 'striptags'),
					"seo_description" => $this->request->getPost('seo_description', 'striptags'),
					"seo_url"         => $this->request->getPost('seo_url'),
					"language"        => "tr",
					"module_id"       => $this->request->getPost('module_id', 'int'),
				));*/

			$query = $this->db->update(
				"pages",
				array('page_id',
					'page_title',
					'page_content',
					'external_url',
					'seo_keywords',
					'seo_description',
					'seo_url',
					'language',
					'module_id'),
				array(
					$page_id,
					$this->request->getPost('page_title', 'striptags'),
					$this->request->getPost('page_content'),
					$this->request->getPost('external_url'),
					$this->request->getPost('seo_keywords', 'striptags'),
					$this->request->getPost('seo_description', 'striptags'),
					$this->request->getPost('seo_url'),
					"tr",
					$this->request->getPost('module_id', 'int')
				),
				"id=" . $id
			);

			if (!$query) {
				return $this->flash->error($Update->getMessages());
			} else {
				return $this->flash->success('<strong>Başarılı</strong> Sayfa başarıyla güncellenmiştir. <a href="/admin/pages/index">Yeniden güncelleme yapmak için tıklayınız</a>');
			}
		}
	}

	/**
	 * Delete Pages
	 *
	 * @return mixed
	 */
	public function deleteAction()
	{
		$this->view->disable();

		$selected_ID = $this->request->getPost('fieldID');

		foreach ($selected_ID as $key) {
			$this->db->delete(
				"pages",
				"id =" . $key
			);
		}
	}

	/**
	 * Order Pages
	 */
	public function orderAction()
	{
		$orderFields = $this->request->getPost('seq');
		$orderID = $this->request->getPost('seqID');

		foreach ($orderFields as $key => $value) {

			$update = $this->db->update(
				"pages",
				array("seq"),
				array($value),
				"id=" . $orderID[$key]
			);

			if ($update) {
				$this->flash->success('Sıralama başarılı');
			}
		}
	}

	/**
	 * Change Page Status
	 *
	 * @param $action
	 *
	 * @return string
	 */
	public function statusAction($action)
	{

		$this->view->disable();

		//Module Actions
		if ($action == "disable") {

			$query = $this->db->update("pages",
				array("status"),
				array("0"),
				"id=" . $this->request->getPost('id')
			);

			if ($query) {
				return $this->flash->success('Durum Güncellendi');
			} else {
				return $this->flash->error('Durum Güncellenemedi');
			}
		}

		if ($action == "enable") {

			$query = $this->db->update("pages",
				array("status"),
				array("1"),
				"id=" . $this->request->getPost('id')
			);

			if ($query) {
				return $this->flash->success('Durum Güncellendi');
			} else {
				return $this->flash->error('Durum Güncellenemedi');
			}
		}
	}

}