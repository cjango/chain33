<?php

namespace Jason\Chain33\Freeze;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{

    public function register(Container $app): void
    {
        $app['freeze'] = static function ($app) {
            return new Client($app);
        };
    }

}
