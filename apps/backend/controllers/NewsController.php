<?php

namespace Multiple\Backend\Controllers;

/**
 * Add Your Models
 */
use Multiple\Backend\Models\News as News;

class NewsController extends ControllerBase
{

    public function editAction($id = NULL)
    {
        //$news_query = News::findFirst('');

        $News = News::find(array('order' => 'seq'));

        if ($News != false) {
            $this->view->setVar("ListNews", $News);
        }

    }

    public function listAction()
    {

    }

    public function addAction()
    {

        //$Add = new News();

        $title = $this->request->getPost('title');

        $query = $this->db->insert('news',
            array($title, '', date("Y.m.d H:i:s"), '', ''),
            array('title', 'content', 'create_date', 'photo', 'seq')
        );

        if ($query) {
            return $this->flash->success('Eklendi');
        } else {
            return $this->flash->error('Eklenemedi');
        }
    }

    public function updateAction()
    {
        $this->view->disable();

    }

    public function deleteAction()
    {
        $this->view->disable();

    }

    public function orderAction($id)
    {
        $newsOrder = News::findFirst('id=' . (int)$id);

        if ($this->request->isPost()) {

            $newsOrder->setOrder($this->request->getPost('seq', 'int'));

            if (!$newsOrder->update()) {
                $this->flash->error('Sıralama Hatası');
            } else {
                $this->flash->success('Sıralama Başarılıdır');
            }
        }


//        $query = $this->db->update("news",
//            array("seq"),
//            array($this->request->getPost('seq', 'int')),
//            "id=" . $this->request->getPost('fieldID', 'int')
//        );
//
//        if ($query) {
//            return $this->flash->success('Modül Güncellendi');
//        } else {
//            return $this->flash->error('Modül Güncellenemedi');
//        }

    }
}