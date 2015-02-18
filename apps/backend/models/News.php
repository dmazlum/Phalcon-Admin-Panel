<?php

namespace Modules\Backend\Models;

class News extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $id;

    /**
     *
     * @var string
     */
    public $title;

    /**
     *
     * @var string
     */
    public $content;

    /**
     *
     * @var string
     */
    public $create_date;

    /**
     *
     * @var string
     */
    public $photo;

    /**
     *
     * @var string
     */
    public $status;

    /**
     *
     * @var string
     */
    public $seq;

    /**
     * Independent Column Mapping.
     */
    public function columnMap()
    {
        return array(
            'id' => 'id',
            'title' => 'title',
            'content' => 'content',
            'create_date' => 'create_date',
            'photo' => 'photo',
            'status' => 'status',
            'seq' => 'seq'
        );
    }

    public function setTitle()
    {
        //The name is too short?
        if (strlen($this->title) < 1) {
            return $this->getMessages('Haber başlığı kısa olamaz');
        }

        //The name is too short?
        if ($this->title == "") {
            return $this->getMessages('Haber başlığı boş olamaz');
        }

        return $this->title;
    }

    public function setContent()
    {
        //The name is too short?
        if (strlen($this->content) < 10) {
            return $this->getMessages('Haber içeriği çok kısa olamaz');
        }

        //The name is too short?
        if ($this->content == "") {
            return $this->getMessages('Haber içeriği boş olamaz');
        }

        return $this->content;
    }

    public function setOrder()
    {
        if ($this->seq == "") {
            return $this->seq = "000";
        }
    }

    public function setId($id)
    {
        if ($id == "") {
            return $this->getMessages('Lütfen bir kayıt seçiniz');
        } else {
            $this->id = $id;
        }
    }

}