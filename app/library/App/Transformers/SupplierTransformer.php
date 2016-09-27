<?php

namespace App\Transformers;

use App\Model\Supplier;
use PhalconRest\Transformers\Transformer;

class SupplierTransformer extends Transformer
{
    protected $availableIncludes = [
        'purchaseorders'
    ];

    public function includePurchaseorders(Supplier $supplier)
    {
        return $this->collection($supplier->getPurchaseorders(), new PurchaseorderTransformer);
    }

    public function transform(Supplier $supplier)
    {
        return [
            'id' => $this->int($supplier->id),
            'title' => $supplier->title,
            'updated_at' => $supplier->updatedAt,
            'created_at' => $supplier->createdAt
        ];
    }
}
