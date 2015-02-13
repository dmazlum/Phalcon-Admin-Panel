<?php

namespace Multiple\Backend\Models;

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
        if (strlen($title) < 1) {
            throw new \InvalidArgumentException('Haber başlığı çok kısa');
        }

        //The name is too short?
        if ($title == "") {
            throw new \InvalidArgumentException('Haber başlığı boş olamaz');
        }

        $this->title = $title;
    }

    public function setOrder()
    {
        if ($seq == "") {
            return $this->seq = "000";
        }
    }

}
