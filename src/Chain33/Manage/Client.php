<?php

namespace Jason\Chain33\Manage;

use Jason\Chain33\Kernel\BaseClient;

/**
 * Class Client
 * @package Jason\Chain33\Manage
 */
class Client extends BaseClient
{

    const OP_ADD    = 'add';
    const OP_DELETE = 'delete';

    /**
     * Notes   : 添加/删除一个token-finisher
     * @Date   : 2021/3/24 2:02 下午
     * @Author : < Jason.C >
     * @param  string  $addr
     * @param  string  $op  add / delete
     * @return string
     * @throws \Jason\Chain33\Exceptions\ConfigException
     */
    public function finisher(string $addr, string $op = self::OP_ADD): string
    {
        $this->walletUnlock();

        $txHex = $this->client->CreateTransaction([
            'execer'     => 'manage',
            'actionName' => 'Modify',
            'payload'    => [
                'key'   => 'token-finisher',
                'value' => $addr,
                'op'    => $op,
            ],
        ]);

        $txHex = $this->app->transaction->paraTransaction($txHex);

        $data = $this->app->transaction->sign($txHex, $this->config['superManager']['privateKey']);

        return $this->app->transaction->send($data);
    }

    /**
     * Notes   : TOKEN 黑名单管理
     * @Date   : 2021/3/24 2:02 下午
     * @Author : < Jason.C >
     * @param  string  $addr
     * @param  string  $op
     * @return string
     * @throws \Jason\Chain33\Exceptions\ConfigException
     */
    public function blacklist(string $symbol, string $op = self::OP_ADD): string
    {
        $this->walletUnlock();

        $txHex = $this->client->CreateTransaction([
            'execer'     => 'manage',
            'actionName' => 'Modify',
            'payload'    => [
                'key'   => 'token-blacklist',
                'value' => $symbol,
                'op'    => $op,
            ],
        ]);

        $txHex = $this->app->transaction->paraTransaction($txHex);

        $data = $this->app->transaction->sign($txHex, $this->config['superManager']['privateKey']);

        return $this->app->transaction->send($data);
    }

    /**
     * Notes: 查看finish apprv列表
     * @Author: <C.Jason>
     * @Date  : 2020/5/2 21:43
     * @param  string  $type  操作标识符
     * @return array
     */
    public function get($type = 'finisher'): array
    {
        $value = $this->client->Query([
            'execer'   => 'manage',
            'funcName' => 'GetConfigItem',
            'payload'  => [
                'data' => 'token-' . $type,
            ],
        ])['value'];

        $value = str_replace(['[', ']'], '', $value);

        if (empty($value)) {
            return [];
        } else {
            return explode(' ', $value);
        }
    }

}
