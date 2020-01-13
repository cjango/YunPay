<?php

namespace Jason\YunPay\Account;

use Jason\YunPay\Kernel\BaseClient;
use Jason\YunPay\Kernel\Routers;

class Client extends BaseClient
{

    /**
     * Notes: 获取余额
     * @Author: <C.Jason>
     * @Date: 2020/1/2 11:09 上午
     * @return mixed
     */
    public function balance()
    {
        $data = [
            "dealer_id" => $this->config->get('dealer_id'),
        ];

        return $this->client->get(Routers::QUERY_ACCOUNTS, $data);
    }

}
