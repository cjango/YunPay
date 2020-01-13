<?php

namespace Jason\YunPay\Order;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{

    public function register(Container $pimple)
    {
        $pimple['order'] = function ($app) {
            return new Client($app);
        };
    }

}
