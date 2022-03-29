<?php

namespace Jason\Chain33\Balance;

use Jason\Chain33\Exceptions\ChainException;
use Jason\Chain33\Kernel\BaseClient;

/**
 * Class Client.
 */
class Client extends BaseClient
{
    /**
     * Notes: 查询地址余额.
     *
     * @Author: <C.Jason>
     * @Date  : 2020/4/30 22:48
     *
     * @param  string|array  $address  要查询的地址，或地址组
     * @param  string  $execer  执行器名称，coins查询可用的主代币，ticket查询正在挖矿的主代币
     * @param  string  $asset_exec  资产原始合约名称，如bty在coins合约中产生，各种token在token合约中产生，跨链的资产在paracross合约中
     * @param  string  $asset_symbol  资产名称，如 bty,token的各种 symbol，跨链的bty名称为 coins.bty, 跨链的token为token.symbol
     * @return array
     *
     * @throws ChainException
     */
    public function get(
        $address,
        string $execer = 'coins',
        string $asset_exec = 'coins',
        string $asset_symbol = ''
    ): array {
        $flat = is_string($address);

        $addresses = $flat ? [$address] : $address;

        $result = $this->client->GetBalance([
            'execer'       => $this->parseExecer($execer),
            'addresses'    => $addresses,
            'asset_exec'   => $asset_exec,
            'asset_symbol' => $asset_symbol,
        ]);

        return $flat ? $result[0] : $result;
    }

    /**
     * Notes: 查询地址token余额.
     *
     * @Author: <C.Jason>
     * @Date  : 2020/4/30 22:50
     *
     * @param  string|array  $address  要查询的地址，或地址组
     * @param  string  $symbol  token符号名称
     * @return array
     *
     * @throws ChainException
     */
    public function token(string $address, string $symbol): array
    {
        $flat = is_string($address);

        $addresses = $flat ? [$address] : $address;

        $result = $this->client->GetTokenBalance([
            'execer'      => $this->parseExecer('token'),
            'tokenSymbol' => $symbol,
            'addresses'   => $addresses,
        ], 'token');

        return $flat ? $result[0] : $result;
    }

    /**
     * Notes   : 查询地址所有合约地址余额.
     *
     * @Date   : 2021/8/12 8:52 上午
     * @Author : <Jason.C>
     *
     * @param  string  $address  要查询的地址
     * @param  string  $exec  资产原始合约名称，如bty 在 coins 合约中产生，各种token 在 token 合约中产生， 跨链的资产在 paracross 合约中
     * @param  string  $execer  执行器名称，coins 查询可用的主代币 ，ticket 查询正在挖矿的主代币
     * @return mixed
     */
    public function all(string $address, string $exec = 'coins', string $execer = 'coins')
    {
        return $this->client->GetAllExecBalance([
            'addr'         => $address,
            'execer'       => $execer,
            'asset_exec'   => $exec,
            'asset_symbol' => '',
        ])['execAccount'];
    }

    /**
     * Notes: 查询地址所有TOKEN余额.
     *
     * @Author : <C.Jason>
     * @Date   : 2020/4/30 22:53
     *
     * @param  string  $address  要查询的地址
     * @return array|null
     */
    public function assets(string $address): ?array
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
     * Notes   :  查询合约地址余额，待完善.
     *
     * @Date   : 2021/8/11 10:39 上午
     * @Author : <Jason.c>
     *
     * @param  string  $execer  合约地址
     * @param  array|string  $address  账户地址
     * @param  string  $asset_exec  执行器名称
     * @param  string  $asset_symbol  代币
     * @return array
     *
     * @throws ChainException
     */
    public function exec(
        string $execer,
        $address,
        string $asset_exec = 'coins',
        string $asset_symbol = ''
    ): array {
        $flat = is_string($address);

        $addresses = $flat ? [$address] : $address;

        $result = $this->client->GetBalance([
            'execer'       => $this->parseExecer($execer),
            'addresses'    => $addresses,
            'asset_exec'   => $asset_exec,
            'asset_symbol' => $asset_symbol,
        ]);

        return $flat ? $result[0] : $result;
    }
}
