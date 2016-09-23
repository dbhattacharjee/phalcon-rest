<?php

namespace App\Transformers;

use App\Model\Customer;
use PhalconRest\Transformers\Transformer;

class CustomerTransformer extends Transformer
{
//    protected $availableIncludes = [
//        'photos'
//    ];

//    public function includePhotos(Album $customer)
//    {
//        return $this->collection($customer->getPhotos(), new PhotoTransformer);
//    }

    public function transform(Customer $customer)
    {
        return [
            'id' => $this->int($customer->id),
            'name' => $customer->name,
            'email' => $customer->email,
            'updated_at' => $customer->updatedAt,
            'created_at' => $customer->createdAt
        ];
    }
}
