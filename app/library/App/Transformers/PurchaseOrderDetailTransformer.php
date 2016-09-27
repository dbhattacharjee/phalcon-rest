<?php

namespace App\Transformers;

use App\Model\PurchaseOrderDetails;
use PhalconRest\Transformers\Transformer;

class PurchaseOrderDetailTransformer extends Transformer
{
    protected $availableIncludes = [
        'item', 'purchaseorder'
    ];

    public function includeItem(Item $item)
    {
        return $this->item($item->getItem(), new ItemTransformer());
    }
    public function includePurchaseOrder(PurchaseOrder $purchaseOrder)
    {
        return $this->item($purchaseOrder->getPurchaseOrder(), new PurchaseOrderTransformer());
    }

    public function transform(PurchaseOrderDetails $purchaseOrderDetails)
    {
        return [
            'id' => $this->int($purchaseOrderDetails->id),
            'itemId' => $this->int($purchaseOrderDetails->itemId),
            'purchaseOrderId' => $this->int($purchaseOrderDetails->purchaseOrderId)
        ];
    }
}
