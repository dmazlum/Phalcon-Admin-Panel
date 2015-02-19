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
            'min' => 2,
            'messageMinimum' => '<strong>HATA</strong> Başlık çok kısa olamaz'
        )));

        $this->add('title', new PresenceOf(array(
            'message' => '<strong>HATA</strong> Başlık boş olamaz'
        )));

        $this->add('content', new PresenceOf(array(
            'message' => '<strong>HATA</strong> İçerik boş bırakılamaz'
        )));
    }
}