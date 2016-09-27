<?php

namespace App\Model;

class PurchaseOrder extends \App\Mvc\DateTrackingModel
{
    public $id;
    public $title;
    public $supplierId;

    public function getSource()
    {
        return 'purchase_order';
    }

    public function columnMap()
    {
        return parent::columnMap() + [
            'id' => 'id',
            'title' => 'title',
            'supplier_id' => 'supplierId'
        ];
    }

    public function initialize() {

        $this->belongsTo('supplierId', Supplier::class, 'id', [
            'alias' => 'Supplier',
        ]);
    }
}
