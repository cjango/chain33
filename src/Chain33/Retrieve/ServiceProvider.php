<?php

namespace Jason\Chain33\Retrieve;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple): void
    {
        $pimple['retrieve'] = static function ($app) {
            return new Client($app);
        };
    }
}
