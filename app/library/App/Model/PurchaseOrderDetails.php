<?php

namespace App\Model;

class PurchaseOrderDetails extends \App\Mvc\DateTrackingModel
{
    public $id;
    public $purchaseOrderId;
    public $itemId;

    public function getSource()
    {
        return 'purchase_order_detail';
    }

    public function columnMap()
    {
        return parent::columnMap() + [
            'id' => 'id',
            'purchase_order_id' => 'purchaseOrderId',
            'item_id' => 'itemId'
        ];
    }

    public function initialize() {

        $this->belongsTo('purchaseOrderId', PurchaseOrder::class, 'id', [
            'alias' => 'PurchaseOrder',
        ]);
        $this->belongsTo('itemId', Item::class, 'id', [
            'alias' => 'Item',
        ]);
    }
}
