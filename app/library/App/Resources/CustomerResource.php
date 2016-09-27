<?php

namespace App\Resources;

use PhalconRest\Api\Resource;
use App\Model\Customer;
use App\Controllers\CustomerController;
use App\Transformers\CustomerTransformer;
use App\Constants\AclRoles;

class CustomerResource extends Resource {

    public function initialize()
    {
        $this
            ->name('Customer')
            ->model(Customer::class)
            ->expectsJsonData()
            ->handler(CustomerController::class)    
            ->transformer(CustomerTransformer::class)
            ->itemKey('customer')
            ->collectionKey('customers')
            ->deny(AclRoles::UNAUTHORIZED);
    }
}