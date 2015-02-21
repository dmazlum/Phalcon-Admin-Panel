<?php

namespace Modules\Backend\Controllers;

use Modules\Backend\Models\News as News;

class NewsController extends ControllerBase
{

    public function indexAction($action = NULL, $id = NULL)
    {

        if ($action == "edit") {

            $News = News::find("id=" . $id);

            if ($News != false) {
                $this->view->setVar("UpdateNews", $News);
            }
        }

        $News = News::find(array('order' => 'seq'));

        if ($News != false) {
            $this->view->setVar("ListNews", $News);
        }
    }


    /**
     * @param null $id
     */
    public function editAction($id = NULL)
    {

    }

    /**
     * List News
     */
    public function listAction()
    {

    }

    /**
     * Add News
     * @return mixed
     */
    public function addAction()
    {

        //Validate All Fields
        $validate = $this->MyValidation->validate($_POST);

        if (count($validate)) {
            foreach ($validate as $message) {
                $this->flash->error($message);
                return false;
            }
        } else {

            $Add = new News();

            //Check if the user has uploaded files
            if ($this->request->hasFiles() == true) {

                //Print the real file names and their sizes
                foreach ($this->request->getUploadedFiles() as $file) {

                    $file->moveTo('uploads/' . $file->getName());

                    //Get Filename
                    $fileName = $file->getName();
                }

                $Add->assign(array(
                    'title' => $this->request->getPost('title', 'striptags'),
                    'content' => $this->request->getPost('content'),
                    'create_date' => date("Y.m.d H:i:s"),
                    'photo' => $fileName,
                    'status' => 1,
                    'seq' => $Add->setOrder()
                ));

            } else {

                $Add->assign(array(
                    'title' => $this->request->getPost('title', 'striptags'),
                    'content' => $this->request->getPost('content'),
                    'create_date' => date("Y.m.d H:i:s"),
                    'status' => 1,
                    'seq' => $Add->setOrder()
                ));
            }

            if (!$Add->save()) {
                return $this->flash->error('Kayıt Sırasında Hata Oluştu');
            } else {
                return $this->flash->success('<strong>Başarılı</strong> Haber başarıyla eklenmiştir. <a href="/admin/news/index">Yeniden eklemek için tıklayınız</a>');
            }
        }

        exit;
    }

    public function updateAction()
    {
        $this->view->disable();
    }

    /**
     * Delete News and News Photos
     * @param sting $action
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
            $photos = News::findFirst("id=".$PhotoId);

            if ($photos != "false") {
                $this->db->update(
                    "news",
                    array("photo"),
                    array(""),
                    "id =" . $PhotoId
                );
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
                return $this->flash->success('Modül Güncellendi');
            } else {
                return $this->flash->error('Modül Güncellenemedi');
            }
        }

        if ($action == "enable") {

            $query = $this->db->update("news",
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