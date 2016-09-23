<?php

namespace App\Resources;

use PhalconRest\Api\Resource;
use App\Model\Customer;
use App\Transformers\CustomerTransformer;
use App\Constants\AclRoles;

class CustomerResource extends Resource {

    public function initialize()
    {
        $this
            ->name('Customer')
            ->model(Customer::class)
            ->expectsJsonData()
            ->transformer(CustomerTransformer::class)
            ->itemKey('customer')
            ->collectionKey('customers')
            ->deny(AclRoles::UNAUTHORIZED);
    }
}