<?php

namespace App\Model;

class Item extends \App\Mvc\DateTrackingModel
{
    public $id;
    public $title;

    public function getSource()
    {
        return 'item';
    }

    public function columnMap()
    {
        return parent::columnMap() + [
            'id' => 'id',
            'title' => 'title'
        ];
    }

    public function initialize() {

        $this->hasMany('id', PurchaseOrderDetail::class, 'itemId', [
            'alias' => 'purchaseorderdetails',
        ]);
    }
}
