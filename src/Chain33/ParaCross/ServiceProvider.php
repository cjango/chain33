<?php

namespace Jason\Chain33\ParaCross;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{

    public function register(Container $pimple): void
    {
        $pimple['paracross'] = static function ($app) {
            return new Client($app);
        };
    }

}
