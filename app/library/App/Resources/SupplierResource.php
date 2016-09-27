<?php

namespace App\Resources;

use PhalconRest\Api\Resource;
use App\Model\Supplier;
use App\Transformers\SupplierTransformer;
use App\Constants\AclRoles;

class SupplierResource extends Resource {

    public function initialize()
    {
        $this
            ->name('Supplier')
            ->model(Supplier::class)
            ->expectsJsonData()
            ->transformer(SupplierTransformer::class)
            ->itemKey('supplier')
            ->collectionKey('supliers')
            ->deny(AclRoles::UNAUTHORIZED);
    }
}