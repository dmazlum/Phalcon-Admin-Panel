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
    public $sequence;

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
            'sequence' => 'sequence'
        );
    }

}
