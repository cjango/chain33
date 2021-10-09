<?php

namespace Jason\Chain33\Mempool;

use Jason\Chain33\Kernel\BaseClient;

/**
 * Class Client.
 */
class Client extends BaseClient
{
    /**
     * Notes   : 获取交易池.
     *
     * @Date   : 2021/1/27 11:00 下午
     * @Author : <Jason.C>
     *
     * @param  false $isAll 是否获取全部交易信息
     * @return array
     */
    public function get(bool $isAll = false): array
    {
        if ($this->isParaChain()) {
            return [];
        }

        return $this->client->GetMempool([
            'isAll' => $isAll,
        ])['txs'];
    }

    /**
     * Notes   : 获取最后的交易.
     *
     * @Date   : 2021/3/30 9:28 上午
     * @Author : <Jason.C>
     *
     * @return array|mixed
     */
    public function last()
    {
        if ($this->isParaChain()) {
            return [];
        }

        return $this->client->GetLastMemPool()['txs'];
    }
}
