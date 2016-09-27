<?php

namespace App\Bootstrap;

use App\BootstrapInterface;
use App\Collections\ExportCollection;
use App\Resources\UserResource;
//use App\Resources\AlbumResource;
//use App\Resources\PhotoResource;
use App\Resources\ItemResource;
use App\Resources\SupplierResource;
use App\Resources\PurchaseOrderResource;
use App\Resources\PurchaseOrderDetailResource;
use Phalcon\Acl;
use Phalcon\Config;
use Phalcon\DiInterface;
use PhalconRest\Api;

class CollectionBootstrap implements BootstrapInterface
{
    public function run(Api $api, DiInterface $di, Config $config)
    {
        $api
            ->collection(ExportCollection::factory('/export'))
            ->resource(UserResource::factory('/users'))
//            ->resource(AlbumResource::crud('/albums'))
//            ->resource(PhotoResource::crud('/photos'))
            ->resource(ItemResource::crud('/items'))
            ->resource(SupplierResource::crud('/suppliers'))
            ->resource(PurchaseOrderResource::crud('/purchase-orders'))
            ->resource(PurchaseOrderDetailResource::crud('/purchase-orders-details'))
            ;

    }
}