<?php

namespace Jason\Chain33\Token;

use Exception;
use Jason\Chain33\Kernel\BaseClient;

/**
 * Class Client.
 */
class Client extends BaseClient
{
    /**
     * Notes: 发行TOKEN.
     *
     * @Author: <C.Jason>
     * @Date  : 2020/5/25 3:59 下午
     * @param  string  $name          token 名称
     * @param  string  $symbol        token标记符，最大长度是16个字符，且必须为大写字符和数字
     * @param  string  $introduction  token 简介
     * @param  int     $total         发行总量
     * @param  string  $owner         token拥有者地址
     * @param  int     $category      token属性类别， 0 为普通token， 1 可增发和燃烧
     * @param  int     $price         发行该token愿意承担的费用
     * @return string
     * @throws \Jason\Chain33\Exceptions\ConfigException
     */
    public function publish(
        string $name,
        string $symbol,
        string $introduction,
        int $total,
        string $owner,
        int $category = 0,
        int $price = 0
    ): string {
        $this->walletUnlock();

        $txHex = $this->client->CreateRawTokenPreCreateTx([
            'name'         => $name,
            'symbol'       => strtoupper($symbol),
            'introduction' => $introduction,
            'total'        => $total,
            'price'        => $price,
            'category'     => $category,
            'owner'        => $owner,
        ], 'token');

        return $this->app->transaction->finalSend($txHex, $this->config['superManager']['privateKey']);
    }

    /**
     * Notes: 完成发行TOKEN.
     *
     * @Author: <C.Jason>
     * @Date  : 2020/5/14 6:17 下午
     * @param  string  $symbol  token标记符，最大长度是16个字符，且必须为大写字符和数字
     * @param  string  $owner   token拥有者地址
     * @return string
     * @throws \Jason\Chain33\Exceptions\ConfigException
     */
    public function finish(string $symbol, string $owner): string
    {
        $this->walletUnlock();

        $txHex = $this->client->CreateRawTokenFinishTx([
            'symbol' => strtoupper($symbol),
            'owner'  => $owner,
        ], 'token');

        return $this->app->transaction->finalSend($txHex, $this->config['superManager']['privateKey']);
    }

    /**
     * Notes   :  查询所有预创建的token | 查询所有创建成功的token.
     *
     * @Date   : 2021/3/31 12:03 下午
     * @Author : <C.Jason>
     * @param  int  $status
     * @return array
     */
    public function get(int $status = 0): array
    {
        try {
            return $this->client->Query([
                'execer'   => 'token',
                'funcName' => 'GetTokens',
                'payload'  => [
                    'status'     => $status,
                    'queryAll'   => true,
                    'symbolOnly' => false,
                ],
            ])['tokens'];
        } catch (Exception $exception) {
            return [];
        }
    }

    /**
     * Notes: 查询指定创建成功的token.
     *
     * @Author: <C.Jason>
     * @Date  : 2020/5/14 6:19 下午
     * @param  string  $symbol  token的Symbol
     * @return array
     */
    public function info(string $symbol): array
    {
        return $this->client->Query([
            'execer'   => 'token',
            'funcName' => 'GetTokenInfo',
            'payload'  => [
                'data' => $symbol,
            ],
        ]);
    }

    /**
     * Notes: 生成撤销创建token的交易，只能撤销未完成的（un finish）.
     *
     * @Author: <C.Jason>
     * @Date  : 2020/5/20 3:24 下午
     * @param  string  $symbol  token的Symbol
     * @param  string  $owner   拥有者地址
     * @return string
     */
    public function revoke(string $symbol, string $owner): string
    {
        $txHex = $this->client->CreateRawTokenRevokeTx([
            'symbol' => $symbol,
            'owner'  => $owner,
        ], 'token');

        return $this->app->transaction->finalSend($txHex, $this->config['superManager']['privateKey']);
    }

    /**
     * Notes: 查询地址下的token合约下的token资产.
     *
     * @Author: <C.Jason>
     * @Date  : 2020/5/20 3:34 下午
     * @param  string  $address  要查询的地址
     * @return array
     */
    public function assets(string $address): array
    {
        return $this->client->Query([
            'execer'   => 'token',
            'funcName' => 'GetAccountTokenAssets',
            'payload'  => [
                'address' => $address,
                'execer'  => 'token',
            ],
        ])['tokenAssets'];
    }

    /**
     * Notes: 查询token相关的交易.
     *
     * @Author: <C.Jason>
     * @Date  : 2020/5/25 11:07 上午
     * @param  string  $symbol     token标记符
     * @param  string  $addr       地址
     * @param  int     $count      count: 交易的数量
     * @param  int     $flag       分页相关参数
     * @param  int     $direction  分页相关参数
     * @param  int     $height     分页相关参数
     * @param  int     $index      分页相关参数
     * @return array
     * @throws \Jason\Chain33\Exceptions\ChainException
     */
    public function tx(
        string $symbol,
        string $addr = '',
        int $count = 100,
        int $flag = 0,
        int $direction = 0,
        int $height = -1,
        int $index = 0
    ): array {
        return $this->client->Query([
            'execer'   => $this->parseExecer('token'),
            'funcName' => 'GetTxByToken',
            'payload'  => [
                'symbol'    => $symbol,
                'addr'      => $addr,
                'count'     => $count,
                'flag'      => $flag,
                'height'    => $height,
                'index'     => $index,
                'direction' => $direction,
            ],
        ])['txInfos'];
    }

    /**
     * Notes: token的增发.
     *
     * @Author: <C.Jason>
     * @Date  : 2020/5/20 3:44 下午
     * @param  string  $symbol      token的标记符
     * @param  int     $amount      增发token的数量
     * @param  string  $privateKey  token 拥有者的私钥
     * @return string
     */
    public function mint(string $symbol, int $amount, string $privateKey): string
    {
        $txHex = $this->client->CreateRawTokenMintTx([
            'symbol' => $symbol,
            'amount' => $amount,
        ], 'token');

        return $this->app->transaction->finalSend($txHex, $privateKey);
    }

    /**
     * Notes: token的燃烧.
     *
     * @Author: <C.Jason>
     * @Date  : 2020/5/20 3:44 下午
     * @param  string  $symbol      token的标记符
     * @param  int     $amount      燃烧token的数量
     * @param  string  $privateKey  token 拥有者的私钥
     * @return string
     */
    public function burn(string $symbol, int $amount, string $privateKey): string
    {
        $txHex = $this->client->CreateRawTokenBurnTx([
            'symbol' => $symbol,
            'amount' => $amount,
        ], 'token');

        return $this->app->transaction->finalSend($txHex, $privateKey);
    }

    /**
     * Notes: 查询token的变化记录.
     *
     * @Author: <C.Jason>
     * @Date  : 2020/5/20 3:47 下午
     * @param  string  $symbol  token标记符
     * @return array  actionType: 8 是token创建， 12 是增发， 13 是燃烧
     * @throws \Jason\Chain33\Exceptions\ChainException
     */
    public function history(string $symbol): array
    {
        return $this->client->Query([
            'execer'   => $this->parseExecer('token'),
            'funcName' => 'GetTokenHistory',
            'payload'  => [
                'data' => $symbol,
            ],
        ])['logs'];
    }

    /**
     * Notes: 发送交易.
     *
     * @Author: <C.Jason>
     * @Date  : 2020/4/30 17:41
     * @param  string  $to      发送到地址
     * @param  string  $symbol  token的symbol
     * @param  int     $amount  发送金额
     * @param  string  $privateKey
     * @param  string  $note    备注
     * @return string
     * @throws \Jason\Chain33\Exceptions\ChainException
     * @throws \Jason\Chain33\Exceptions\ConfigException
     */
    public function transfer(string $to, string $symbol, int $amount, string $privateKey, string $note = ''): string
    {
        $this->walletUnlock();

        $txHex = $this->client->CreateRawTransaction([
            'to'          => $to,
            'amount'      => $amount,
            'fee'         => 0,
            'note'        => $note,
            'isWithdraw'  => false,
            'isToken'     => true,
            'tokenSymbol' => $symbol,
            'execer'      => $this->parseExecer('token'),
        ]);

        return $this->app->transaction->finalSend($txHex, $privateKey);
    }
}
