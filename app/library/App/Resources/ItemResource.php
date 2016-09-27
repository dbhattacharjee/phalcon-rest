<?php

namespace App\Resources;

use PhalconRest\Api\Resource;
use App\Model\Item;
use App\Transformers\ItemTransformer;
use App\Constants\AclRoles;

class ItemResource extends Resource {

    public function initialize()
    {
        $this
            ->name('Item')
            ->model(Item::class)
            ->expectsJsonData()
            ->transformer(ItemTransformer::class)
            ->itemKey('item')
            ->collectionKey('items')
            ->deny(AclRoles::UNAUTHORIZED);
    }
}