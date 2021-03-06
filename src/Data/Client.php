<?php

namespace Jason\YunPay\Data;

use Jason\YunPay\Kernel\BaseClient;
use Jason\YunPay\Kernel\Routers;

class Client extends BaseClient
{

    /**
     * Notes: 查询日订单文件
     * @Author: <C.Jason>
     * @Date: 2020/1/2 2:49 下午
     * @param $date
     * @return mixed
     */
    public function order(string $date)
    {
        $data = [
            'order_date' => $date,
        ];

        return $this->client->get(Routers::ORDER_DOWNLOAD, $data);
    }

    /**
     * Notes: 查询日流水文件
     * @Author: <C.Jason>
     * @Date: 2020/1/2 2:49 下午
     * @param $date
     * @return mixed
     */
    public function bill(string $date)
    {
        $data = [
            'bill_date' => $date,
        ];

        return $this->client->get(Routers::BILL_DOWNLOAD, $data);
    }

    /**
     * Notes: 查询商户充值记录
     * @Author: <C.Jason>
     * @Date: 2020/1/2 2:48 下午
     * @param $begin_at
     * @param $end_at
     * @return mixed
     */
    public function record(string $begin_at, string $end_at)
    {
        $data = [
            'begin_at' => $begin_at,
            'end_at'   => $end_at,
        ];

        return $this->client->get(Routers::RECHARGE_RECORD, $data);
    }

}
