<?php

namespace App\Resources;

use PhalconRest\Api\Resource;
use App\Model\PurchaseOrder;
use App\Transformers\PurchaseOrderTransformer;
use App\Constants\AclRoles;

class PurchaseOrderResource extends Resource {

    public function initialize()
    {
        $this
            ->name('PurchaseOrder')
            ->model(PurchaseOrder::class)
            ->expectsJsonData()
            ->transformer(PurchaseOrderTransformer::class)
            ->itemKey('purchaseorder')
            ->collectionKey('PurchaseOrder')
            ->deny(AclRoles::UNAUTHORIZED);
    }
}