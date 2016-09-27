<?php

namespace App\Resources;

use PhalconRest\Api\Resource;
use App\Model\PurchaseOrderDetails;
use App\Transformers\PurchaseOrderDetailTransformer;
use App\Constants\AclRoles;

class PurchaseOrderDetailResource extends Resource {

    public function initialize()
    {
        $this
            ->name('PurchaseOrderDetails')
            ->model(PurchaseOrderDetails::class)
            ->expectsJsonData()
            ->transformer(PurchaseOrderDetailTransformer::class)
            ->itemKey('purchaseorderdetail')
            ->collectionKey('purchaseorderdetail')
            ->deny(AclRoles::UNAUTHORIZED);
    }
}