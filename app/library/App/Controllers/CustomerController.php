<?php

namespace App\Controllers;

use PhalconRest\Mvc\Controllers\CrudResourceController;

class CustomerController extends CrudResourceController
{
    
    
    public function whitelist()
    {
        return [
            'firstName',
            'lastName',
            'password'
        ];
    }
}
