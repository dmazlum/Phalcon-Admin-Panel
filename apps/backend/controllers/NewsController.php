<?php

namespace Modules\Backend\Controllers;

use Modules\Backend\Models\News as News;

class NewsController extends ControllerBase
{
    public function allAction()
    {
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

            $Add->assign(array(
                'title' => $this->request->getPost('title', 'striptags'),
                'content' => $this->request->getPost('content'),
                'create_date' => date("Y.m.d H:i:s"),
                'photo' => $this->request->getPost('photos'),
                'status' => 1,
                'seq' => $Add->setOrder()
            ));

            if (!$Add->save()) {
                return $this->flash->error('Kayıt Sırasında Hata Oluştu');
            } else {
                return $this->flash->success('Eklendi');
            }
        }

        exit;
    }

    public function updateAction()
    {
        $this->view->disable();
    }

    /**
     * Delete News
     * @return mixed
     */
    public function deleteAction()
    {
        $this->view->disable();

        $selected_ID = $this->request->getPost('fieldID');

        foreach ($selected_ID as $key) {
            $this->db->delete(
                "news",
                "id =" . $key
            );
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
}