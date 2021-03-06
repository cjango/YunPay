<?php

namespace Jason\YunPay\Kernel;

use Pimple\Container;

class BaseClient
{

    /**
     * @var
     */
    protected $app;

    /**
     * @var
     */
    protected $client;

    /**
     * @var
     */
    protected $config;

    /**
     * Client constructor.
     *
     * @param
     */
    public function __construct(Container $app)
    {
        $this->app    = $app;
        $this->client = $this->app->client;
        $this->config = $this->app->config;
    }

}
