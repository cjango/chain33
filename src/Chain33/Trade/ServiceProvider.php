<?php

namespace Jason\Chain33\Trade;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple): void
    {
        $pimple['trade'] = static function ($app) {
            return new Client($app);
        };
    }
}
