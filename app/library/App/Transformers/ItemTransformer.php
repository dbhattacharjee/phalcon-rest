<?php

namespace App\Transformers;

use App\Model\Item;
use PhalconRest\Transformers\Transformer;

class ItemTransformer extends Transformer
{
    protected $availableIncludes = [
        'purchaseorderdetails'
    ];

    public function includePurchaseorderdetails(Item $item)
    {
        return $this->collection($item->getPurchaseorderdetails(), new PurchaseorderdetailsTransformer);
    }

    public function transform(Item $item)
    {
        return [
            'id' => $this->int($item->id),
            'title' => $item->title,
            'updated_at' => $item->updatedAt,
            'created_at' => $item->createdAt
        ];
    }
}
