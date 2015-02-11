<?php

namespace Multiple\Backend\Controllers;

/**
 * Add Your Models
 */
use Multiple\Backend\Models\News as News;

class NewsController extends ControllerBase
{

    public function editAction()
    {

    }

    public function listAction()
    {

    }

    public function addAction()
    {
        $this->view->disable();

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
}