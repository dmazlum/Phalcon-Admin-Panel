<?php

namespace Modules\Backend\Controllers;

use Modules\Backend\Models\News as News,
	Modules\Backend\Plugins\SeoUrl;

class NewsController extends ControllerBase
{

	public function indexAction($action = NULL, $id = NULL)
	{

		if ($action == "edit") {

			$News = News::find("id=" . $id);

			if ($News != FALSE) {
				$this->view->setVar("UpdateNews", $News);
			}
		}

		$News = News::find(array('order' => 'seq'));

		if ($News != FALSE) {
			$this->view->setVar("ListNews", $News);
		}
	}


	/**
	 * Add News
	 * @return mixed
	 */
	public function addAction()
	{

		$Add = new News();

		if ($this->request->isPost()) {

			//Check if the user has uploaded files
			if ($this->request->hasFiles() == TRUE) {

				//Print the real file names and their sizes
				foreach ($this->request->getUploadedFiles() as $file) {

					$file->moveTo('uploads/' . $file->getName());

					//Get Filename
					$fileName = $file->getName();
				}
			}

			// Create Seo URL
			$seo_url = new SeoUrl();

			$Add->assign(array(
				'title'       => $this->request->getPost('title', 'striptags'),
				'content'     => $this->request->getPost('content'),
				'create_date' => date("Y.m.d H:i:s"),
				'photo'       => $Add->setPhoto($fileName),
				'seo_url'     => $seo_url->create($this->request->getPost('title', 'striptags')),
				'status'      => 1,
				'seq'         => $Add->setOrder()
			));

			if (!$Add->save()) {
				return $this->flash->error($Add->getMessages());
			} else {
				return $this->flash->success('<strong>Başarılı</strong> Haber başarıyla eklenmiştir. <a href="/admin/news/index">Yeniden eklemek için tıklayınız</a>');
			}
		}
	}

	/**
	 * Update News
	 *
	 * @param int $id
	 *
	 * @return bool|string
	 */
	public function updateAction($id)
	{
		$this->view->disable();

		$Update = News::findFirstById($id);

		if ($this->request->isPost()) {

			//Check if the user has uploaded files
			if ($this->request->hasFiles() == TRUE) {

				//Print the real file names and their sizes
				foreach ($this->request->getUploadedFiles() as $file) {

					$file->moveTo('uploads/' . $file->getName());

					//Get Filename
					$fileName = $file->getName();
				}
			}

			// Create Seo URL
			$seo_url = new SeoUrl();

			$Update->assign(array(
				"title"   => $this->request->getPost('title', 'striptags'),
				"content" => $this->request->getPost('content'),
				"seo_url" => $seo_url->create($this->request->getPost('title', 'striptags')),
				"photo"   => $Update->setPhoto($fileName)
			));

			if (!$Update->save()) {
				return $this->flash->error($Update->getMessages());
			} else {
				return $this->flash->success('<strong>Başarılı</strong> Haber başarıyla güncellenmiştir. <a href="/admin/news/index">Yeni bir haber güncellemek için tıklayınız</a>');
			}
		}
	}

	/**
	 * Delete News and News Photos
	 *
	 * @param sting $action
	 *
	 * @return mixed
	 */
	public function deleteAction($action = NULL)
	{
		$this->view->disable();

		$selected_ID = $this->request->getPost('fieldID');

		foreach ($selected_ID as $key) {
			$this->db->delete(
				"news",
				"id =" . $key
			);
		}

		//Delete Photos
		if ($action == "photo") {

			$PhotoId = $this->request->getPost('id');
			$photos = News::find(array("id=" . $PhotoId));

			if ($photos != "false") {

				$this->db->update(
					"news",
					array("photo"),
					array(""),
					"id =" . $PhotoId
				);

				//Delete photo from folder
				foreach ($photos as $row) {
					unlink("uploads/" . $row->photo);
				}
			}
		}
	}

	/**
	 * Order News
	 */
	public function orderAction()
	{
		$orderFields = $this->request->getPost('seq');
		$orderID = $this->request->getPost('seqID');

		foreach ($orderFields as $key => $value) {

			$update = $this->db->update(
				"news",
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
	 * Change News Status
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

			$query = $this->db->update("news",
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

			$query = $this->db->update("news",
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