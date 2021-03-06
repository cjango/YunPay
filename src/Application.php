<?php

namespace Jason\YunPay;

use Closure;
use Illuminate\Support\Collection;
use Pimple\Container;

class Application extends Container
{

    /**
     * @var array
     */
    protected $providers = [
        Account\ServiceProvider::class,
        Auth\ServiceProvider::class,
        Data\ServiceProvider::class,
        Invoice\ServiceProvider::class,
        Kernel\ServiceProvider::class,
        Order\ServiceProvider::class,
    ];

    /**
     * Application constructor.
     * @param array $config
     * @param array $values
     */
    public function __construct(array $config = [], array $values = [])
    {
        $this['config'] = function () use ($config) {
            return new Collection($config);
        };

        foreach ($this->providers as $provider) {
            $this->register(new $provider());
        }
    }

    /**
     * @param $name
     *
     * @return mixed
     */
    public function __get($name)
    {
        return $this[$name];
    }

    /**
     * Notes: 处理通知
     * @Author: <C.Jason>
     * @Date: 2020/1/2 4:05 下午
     * @param Closure $closure
     * @return mixed
     */
    public function notify(Closure $closure)
    {
        return (new Notify\Paid($this))->handle($closure);
    }

}
