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
    public function GetOnesBuyOrder(string $addr, array $token = [])
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

    /**
     * Notes   : 卖出资产
     * @Date   : 2021/3/30 4:50 下午
     * @Author : < Jason.C >
     * @param  string  $tokenSymbol        资产标识符
     * @param  string  $assetExec          资产来源的执行器名称
     * @param  int     $amountPerBoardlot  每一手成交的数量
     * @param  int     $minBoardlot        一次购买最少成交的数量
     * @param  int     $pricePerBoardlot   一手成交的价格
     * @param  int     $totalBoardlot      总共的出售的手数
     * @param  string  $priceExec          标价资产的合约
     * @param  string  $priceSymbol        标价资产的名字
     * @param  string  $privateKey         发布者私钥
     * @return string
     */
    public function sell(
        string $tokenSymbol,
        string $assetExec,
        int $amountPerBoardlot,
        int $minBoardlot,
        int $pricePerBoardlot,
        int $totalBoardlot,
        string $priceExec,
        string $priceSymbol,
        string $privateKey
    ): string {
        $txHex = $this->client->CreateRawTradeSellTx([
            'tokenSymbol'       => $tokenSymbol,
            'assetExec'         => $this->parseExecer($assetExec),
            'amountPerBoardlot' => $amountPerBoardlot,
            'minBoardlot'       => $minBoardlot,
            'pricePerBoardlot'  => $pricePerBoardlot,
            'totalBoardlot'     => $totalBoardlot,
            'priceExec'         => $this->parseExecer($priceExec),
            'priceSymbol'       => $priceSymbol,
            'fee'               => 0,
        ], 'trade');

        return $this->app->transaction->finalSend($txHex, $privateKey);
    }

    /**
     * Notes   : 买入资产
     * @Date   : 2021/3/30 4:50 下午
     * @Author : < Jason.C >
     * @param  string  $tokenSymbol        资产标识符
     * @param  string  $assetExec          资产来源的执行器名称
     * @param  int     $amountPerBoardlot  每一手成交的数量
     * @param  int     $minBoardlot        一次购买最少成交的数量
     * @param  int     $pricePerBoardlot   一手成交的价格
     * @param  int     $totalBoardlot      总共的出售的手数
     * @param  string  $priceExec          标价资产的合约
     * @param  string  $priceSymbol        标价资产的名字
     * @param  string  $privateKey         发布者私钥
     * @return string
     */
    public function buy(
        string $tokenSymbol,
        string $assetExec,
        int $amountPerBoardlot,
        int $minBoardlot,
        int $pricePerBoardlot,
        int $totalBoardlot,
        string $priceExec,
        string $priceSymbol,
        string $privateKey
    ): string {
        $txHex = $this->client->CreateRawTradeBuyLimitTx([
            'tokenSymbol'       => $tokenSymbol,
            'assetExec'         => $this->parseExecer($assetExec),
            'amountPerBoardlot' => $amountPerBoardlot,
            'minBoardlot'       => $minBoardlot,
            'pricePerBoardlot'  => $pricePerBoardlot,
            'totalBoardlot'     => $totalBoardlot,
            'priceExec'         => $this->parseExecer($priceExec),
            'priceSymbol'       => $priceSymbol,
            'fee'               => 0,
        ], 'trade');

        return $this->app->transaction->finalSend($txHex, $privateKey);
    }

    /**
     * Notes   : 指定TOKEN的所有买单
     * @Date   : 2021/3/30 5:34 下午
     * @Author : < Jason.C >
     * @param  string  $symbol
     * @param  int     $status
     * @return mixed
     * @throws \Jason\Chain33\Exceptions\ChainException
     */
    public function buyOrders(string $symbol, int $status = 1)
    {
        return $this->client->Query([
            'execer'   => $this->parseExecer('trade'),
            'funcName' => 'GetTokenBuyOrderByStatus',
            'payload'  => [
                'tokenSymbol' => $symbol,
                'status'      => $status,
                'count'       => 100,
                'direction'   => 0,
                'fromKey'     => '',
            ],
        ]);
    }

    /**
     * Notes   : 指定TOKEN的所有卖单
     * @Date   : 2021/3/30 5:34 下午
     * @Author : < Jason.C >
     * @param  string  $symbol
     * @param  int     $status
     * @return mixed
     * @throws \Jason\Chain33\Exceptions\ChainException
     */
    public function sellOrders(string $symbol, int $status = 1)
    {
        return $this->client->Query([
            'execer'   => $this->parseExecer('trade'),
            'funcName' => 'GetTokenSellOrderByStatus',
            'payload'  => [
                'tokenSymbol' => $symbol,
                'status'      => $status,
                'count'       => 100,
                'direction'   => 0,
                'fromKey'     => '',
            ],
        ]);
    }

}
