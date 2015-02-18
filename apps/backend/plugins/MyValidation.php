<?php

namespace Modules\Backend\Plugins;

use Phalcon\Validation,
    Phalcon\Validation\Validator\PresenceOf,
    Phalcon\Validation\Validator\Email,
    Phalcon\Validation\Validator\StringLength as StringLength;

class MyValidation extends Validation
{
    public function initialize()
    {
        $this->add('title', new StringLength(array(
            'min' => 1,
            'messageMinimum' => 'Başlık çok kısa olamaz'
        )));

        $this->add('title', new PresenceOf(array(
            'message' => 'Başlık boş olamaz'
        )));

        $this->add('content', new PresenceOf(array(
            'message' => 'İçerik boş olamaz'
        )));
    }
}