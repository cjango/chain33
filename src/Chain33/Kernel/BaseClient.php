<?php

namespace Jason\Chain33\Kernel;

use Illuminate\Support\Str;
use Jason\Chain33\Exceptions\ChainException;
use Jason\Chain33\Exceptions\ConfigException;

class BaseClient
{
    protected $app;

    protected $config;

    protected $client;

    public function __construct($app)
    {
        $this->app = $app;
        $this->config = $app->config;
        $this->client = $app->client;
    }

    /**
     * Notes   : 解锁钱包.
     *
     * @Date   : 2021/3/24 9:28 上午
     * @Author : < Jason.C >
     *
     * @return void
     *
     * @throws \Jason\Chain33\Exceptions\ConfigException
     */
    protected function walletUnlock(): void
    {
        if (! $this->config['password']) {
            throw new ConfigException('need wallet passwod');
        }

        $res = $this->client->UnLock([
            'passwd'         => $this->config['password'],
            'walletOrTicket' => false,
            'timeout'        => 0,
        ]);
    }

    /**
     * Notes   : 解锁买票功能.
     *
     * @Date   : 2021/3/24 9:30 上午
     * @Author : < Jason.C > 只解锁买票功能
     *
     * @throws \Jason\Chain33\Exceptions\ConfigException
     */
    protected function ticketUnlock(): void
    {
        if (! $this->config['password']) {
            throw new ConfigException('need wallet passwod');
        }

        $res = $this->client->UnLock([
            'passwd'         => $this->config['password'],
            'walletOrTicket' => true,
            'timeout'        => 0,
        ]);
    }

    /**
     * Notes   : 是否是平行链.
     *
     * @Date   : 2021/3/22 4:18 下午
     * @Author : < Jason.C >
     */
    protected function isParaChain(): bool
    {
        return $this->config['para_name'] && preg_match('/user\.p\.[a-zA-Z0-9]*\./', $this->config['para_name']);
    }

    /**
     * Notes   : 解析平行链的执行器地址
     *
     * @Date   : 2021/3/22 2:48 下午
     * @Author : < Jason.C >
     *
     * @param $execer
     * @return string
     *
     * @throws \Jason\Chain33\Exceptions\ChainException
     */
    protected function parseExecer($execer): string
    {
        if ($this->config['para_name']) {
            if (! preg_match('/user\.p\.[a-zA-Z0-9]*\./', $this->config['para_name'])) {
                throw new ChainException('平行链名称配置不正确');
            }

            return $this->config['para_name'].$execer;
        } else {
            return $execer;
        }
    }

    /**
     * Notes   : 格式化16进制字符串.
     *
     * @Date   : 2021/3/26 11:05 上午
     * @Author : < Jason.C >
     *
     * @param $hex
     * @return string
     */
    protected function parseHexString($hex): string
    {
        if (Str::startsWith($hex, '0x')) {
            $hex = Str::substr($hex, 2);
        }

        return $hex;
    }
}
