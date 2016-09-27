<?php

namespace App\Transformers;

use App\Model\PurchaseOrder;
use PhalconRest\Transformers\Transformer;

class PurchaseOrderTransformer extends Transformer
{
    protected $availableIncludes = [
        'supplier'
    ];

    public function includeSupplier(PurchaseOrder $purchaseorder)
    {
        return $this->item($purchaseorder->getPurchaseOrder(), new PurchaseOrderTransformer());
    }

    public function transform(PurchaseOrder $purchaseorder)
    {
        return [
            'id' => $this->int($purchaseorder->id),
            'title' => $purchaseorder->title,
            'supplierId' => $this->int($purchaseorder->supplierId)
        ];
    }
}
