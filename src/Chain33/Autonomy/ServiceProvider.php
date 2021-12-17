<?php

namespace Jason\Chain33\Autonomy;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple): void
    {
        $pimple['autonomy'] = static function ($app) {
            return new Client($app);
        };
    }
}
