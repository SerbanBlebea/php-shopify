<?php

namespace PHPShopify\ServiceProvider;

use Illuminate\Support\ServiceProvider;
use PHPShopify\ShopifySDK;
use PHPShopify\AuthHelper;

class ShopifySDKServiceProvider extends ServiceProvider
{
    public $bindings = [
        ShopifySDKInterface::class => ShopifySDK::class,
    ];

    public $singletons = [
        AuthHelperInterface::class => AuthHelper::class,
    ];

    public function boot()
    {
        //
    }

    public function register()
    {
        //
    }
}
