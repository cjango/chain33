<?php

namespace Jason\Chain33\System;

use Jason\Chain33\Kernel\BaseClient;

/**
 * Class Client
 * @package Jason\Chain33\System
 */
class Client extends BaseClient
{

    /**
     * Notes   : 节点类型
     * @Date   : 2021/3/25 11:53 上午
     * @Author : < Jason.C >
     * @return string
     */
    public function type(): string
    {
        return $this->isParaChain() ? '平行链' : '主链';
    }

    /**
     * Notes: 获取远程节点列表
     * @Author: <C.Jason>
     * @Date  : 2020/4/30 16:05
     * @return array
     */
    public function peer(): array
    {
        if ($this->isParaChain()) {
            return [];
        }

        return $this->client->GetPeerInfo()['peers'];
    }

    /**
     * Notes: 查询节点状态
     * @Author: <C.Jason>
     * @Date  : 2020/4/30 16:04
     * @return array
     */
    public function info(): array
    {
        if ($this->isParaChain()) {
            return [];
        }

        return $this->client->GetNetInfo();
    }

    /**
     * Notes: 查询时间状态
     * @Author: <C.Jason>
     * @Date  : 2020/4/30 16:01
     * @return array
     */
    public function timeStatus(): array
    {
        return $this->client->GetTimeStatus();
    }

    /**
     * Notes: 查询同步状态
     * @Author: <C.Jason>
     * @Date  : 2020/4/30 17:32
     * @return bool
     */
    public function isSync(): bool
    {
        return $this->client->IsSync();
    }

    /**
     * Notes   : 获取主代币信息
     * @Date   : 2021/1/27 10:35 下午
     * @Author : < Jason.C >
     * @return string
     */
    public function coin(): string
    {
        return $this->client->GetCoinSymbol()['data'];
    }

    /**
     * Notes   : 时钟同步状态
     * @Date   : 2021/3/30 9:57 上午
     * @Author : < Jason.C >
     * @return bool
     */
    public function clockSync(): bool
    {
        return $this->client->IsNtpClockSync();
    }

    /**
     * Notes   : 可能是获取失败的数量
     * @Date   : 2021/3/30 11:19 上午
     * @Author : < Jason.C >
     * @return int
     */
    public function failure(): int
    {
        return $this->client->GetFatalFailure();
    }

    /**
     * Notes   : 交易解析
     * @Date   : 2021/3/30 11:20 上午
     * @Author : < Jason.C >
     * @param  string  $txHex
     * @return mixed
     */
    public function decode(string $txHex)
    {
        return $this->client->DecodeRawTransaction([
            'txHex' => $txHex,
        ]);
    }

    public function isParaChain(): bool
    {
        return parent::isParaChain();
    }

}
