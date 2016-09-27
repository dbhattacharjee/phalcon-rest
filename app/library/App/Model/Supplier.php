<?php

namespace App\Model;

class Supplier extends \App\Mvc\DateTrackingModel
{
    public $id;
    public $title;

    public function getSource()
    {
        return 'supplier';
    }

    public function columnMap()
    {
        return parent::columnMap() + [
            'id' => 'id',
            'title' => 'title'
        ];
    }

    public function initialize() {

        $this->hasMany('id', PurchaseOrder::class, 'supplierId', [
            'alias' => 'purchaseorder',
        ]);
    }
}
