<?php

namespace Modules\Backend\Models;

class Modules extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $id;

    /**
     *
     * @var integer
     */
    public $module_id;

    /**
     *
     * @var string
     */
    public $module_name;

    /**
     *
     * @var string
     */
    public $module_file;

    /**
     *
     * @var string
     */
    public $status;

    /**
     * Independent Column Mapping.
     */
    public function columnMap()
    {
        return array(
            'id' => 'id', 
            'module_id' => 'module_id', 
            'module_name' => 'module_name', 
            'module_file' => 'module_file', 
            'status' => 'status'
        );
    }

}
