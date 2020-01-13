<?php

namespace Jason\YunPay\Invoice;

use Jason\YunPay\Kernel\BaseClient;
use Jason\YunPay\Kernel\Routers;

class Client extends BaseClient
{

    /**
     * Notes: 查询⽇日订单⽂文件
     * @Author: <C.Jason>
     * @Date: 2020/1/2 2:49 下午
     * @param int $year
     * @return mixed
     */
    public function stat(int $year)
    {
        $data = [
            'dealer_id' => $this->app->config->get('dealer_id'),
            'broker_id' => $this->app->config->get('broker_id'),
            'year'      => $year,
        ];

        return $this->client->get(Routers::INVOICE_STAT, $data);
    }

}
