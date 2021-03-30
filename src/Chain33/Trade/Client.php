<?php

namespace Jason\Chain33\Trade;

use Jason\Chain33\Kernel\BaseClient;

/**
 * Class Client
 * @package Jason\Chain33\Trade
 */
class Client extends BaseClient
{

    /**
     * Notes   : 查询地址对应的买单
     * @Date   : 2021/3/30 11:45 上午
     * @Author : < Jason.C >
     * @param  string  $addr
     * @param  array   $token
     * @return mixed
     */
    public function GetOnesBuyOrder(string $addr, array $token  = [])
    {
        return $this->client->Query([
            'execer'   => 'trade',
            'funcName' => 'GetOnesBuyOrder',
            'payload'  => [
                'addr'  => $addr,
                'token' => $token,
            ],
        ]);
    }

}
