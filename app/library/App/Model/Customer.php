<?php

namespace App\Model;

class Customer extends \App\Mvc\DateTrackingModel
{
    public $id;
    public $name;
    public $email;

    public function getSource()
    {
        return 'customer';
    }

    public function columnMap()
    {
        return parent::columnMap() + [
            'id' => 'id',
            'name' => 'name',
            'email' => 'email'
        ];
    }

    public function initialize() {

//        $this->hasMany('id', Photo::class, 'albumId', [
//            'alias' => 'Photos',
//        ]);
    }
}
