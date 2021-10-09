<?php

namespace Jason\Chain33\Trade;

use Exception;
use Jason\Chain33\Exceptions\ChainException;
use Jason\Chain33\Kernel\BaseClient;

/**
 * Class Client
 * 交易所的接口.
 */
class Client extends BaseClient
{
    const STATUS_LIST = [
        'TradeOrderStatusOnSale'     => '在售',
        'TradeOrderStatusSoldOut'    => '售完',
        'TradeOrderStatusRevoked'    => '卖单被撤回',
        'TradeOrderStatusExpired'    => '订单超时(目前不支持订单超时)',
        'TradeOrderStatusOnBuy'      => '求购',
        'TradeOrderStatusBoughtOut'  => '购买完成',
        'TradeOrderStatusBuyRevoked' => '买单被撤回',
    ];

    /**
     * Notes   : 卖出资产，挂卖单.
     *
     * @Date   : 2021/3/30 4:50 下午
     * @Author : <Jason.C>
     *
     * @param  string  $tokenSymbol  资产标识符
     * @param  string  $assetExec  资产来源的执行器名称
     * @param  int  $amountPerBoardlot  每一手成交的数量
     * @param  int  $minBoardlot  一次购买最少成交的数量
     * @param  int  $pricePerBoardlot  一手成交的价格
     * @param  int  $totalBoardlot  总共的出售的手数
     * @param  string  $priceExec  标价资产的合约
     * @param  string  $priceSymbol  标价资产的名字
     * @param  string  $privateKey  发布者私钥
     * @param  int  $fee  手续费
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
        string $privateKey,
        int $fee = 0
    ): string {
        $txHex = $this->client->CreateRawTradeSellTx([
            'tokenSymbol'       => $tokenSymbol,
            'assetExec'         => $assetExec,
            'amountPerBoardlot' => $amountPerBoardlot,
            'minBoardlot'       => $minBoardlot,
            'pricePerBoardlot'  => $pricePerBoardlot,
            'totalBoardlot'     => $totalBoardlot,
            'priceExec'         => $priceExec,
            'priceSymbol'       => $priceSymbol,
            'fee'               => $fee,
        ], 'trade');

        return $this->app->transaction->finalSend($txHex, $privateKey);
    }

    /**
     * Notes   : 生成卖出指定买单的token的交易.
     *
     * @Date   : 2021/4/22 11:14 上午
     * @Author : <Jason.C>
     *
     * @param  string  $buyID  买单id
     * @param  int  $boardlotCnt  卖出数量，单位手
     * @param  string  $privateKey  卖家私钥
     * @param  int  $fee  交易的手续费
     * @return string
     */
    public function sellBuy(string $buyID, int $boardlotCnt, string $privateKey, int $fee = 0): string
    {
        $txHex = $this->client->CreateRawTradeSellMarketTx([
            'buyID'       => $buyID,
            'boardlotCnt' => $boardlotCnt,
            'fee'         => $fee,
        ], 'trade');

        return $this->app->transaction->finalSend($txHex, $privateKey);
    }

    /**
     * Notes   : 撤销卖单.
     *
     * @Date   : 2021/4/22 10:51 上午
     * @Author : <Jason.C>
     *
     * @param  string  $sellID  卖单ID
     * @param  string  $privateKey  私钥
     * @param  int  $fee  手续费
     * @return string
     */
    public function sellRevoke(string $sellID, string $privateKey, int $fee = 0): string
    {
        $txHex = $this->client->CreateRawTradeRevokeTx([
            'sellID' => $sellID,
            'fee'    => $fee,
        ], 'trade');

        return $this->app->transaction->finalSend($txHex, $privateKey);
    }

    /**
     * Notes   : 指定TOKEN的所有卖单.
     *
     * @Date   : 2021/4/22 10:39 上午
     * @Author : <Jason.C>
     *
     * @param  string  $symbol  token标识符
     * @param  int  $status  1,表示在售状态; 2,表示售罄状态；3,表示卖单被撤销状态
     * @param  int  $count  最多取的数量
     * @param  int  $direction  查询的方向
     * @param  string  $fromKey  开始查询的主键
     * @return array
     *
     * @throws Exception
     */
    public function sellOrders(
        string $symbol,
        int $status = 1,
        int $count = 20,
        int $direction = 0,
        string $fromKey = ''
    ): array {
        return $this->client->Query([
            'execer'   => $this->parseExecer('trade'),
            'funcName' => 'GetTokenSellOrderByStatus',
            'payload'  => [
                'tokenSymbol' => $symbol,
                'status'      => $status,
                'count'       => $count,
                'direction'   => $direction,
                'fromKey'     => $fromKey,
            ],
        ])['orders'];
    }

    /**
     * Notes   : 显示指定token出售者的一个或多个token 或 不指定token 的卖单.
     *
     * @Date   : 2021/4/22 10:45 上午
     * @Author : <Jason.C>
     *
     * @param  string  $addr  卖单地址
     * @param  array  $tokens  具体的token的标识符，可以是多个
     * @param  int  $count  最多取的数量
     * @param  int  $direction  查询的方向
     * @param  string  $fromKey  开始查询的主键
     * @return array
     *
     * @throws ChainException
     */
    public function addrSellOrders(
        string $addr,
        array $tokens = [],
        int $count = 20,
        int $direction = 0,
        string $fromKey = ''
    ): array {
        return $this->client->Query([
            'execer'   => $this->parseExecer('trade'),
            'funcName' => 'GetOnesSellOrder',
            'payload'  => [
                'addr'      => $addr,
                'token'     => $tokens,
                'count'     => $count,
                'direction' => $direction,
                'fromKey'   => $fromKey,
            ],
        ])['orders'];
    }

    /**
     * Notes   : 显示指定状态下的某地址卖单.
     *
     * @Date   : 2021/4/22 10:55 上午
     * @Author : <Jason.C>
     *
     * @param  string  $addr  卖单地址
     * @param  int  $status  1表示在售状态; 2，表示售罄状态；3，表示卖单被撤销状态
     * @param  int  $count  最多取的数量
     * @param  int  $direction  查询的方向
     * @param  string  $fromKey  开始查询的主键
     * @return array
     *
     * @throws ChainException
     */
    public function addrSellOrdersByStatus(
        string $addr,
        int $status = 1,
        int $count = 20,
        int $direction = 0,
        string $fromKey = ''
    ): array {
        return $this->client->Query([
            'execer'   => $this->parseExecer('trade'),
            'funcName' => 'GetOnesSellOrderWithStatus',
            'payload'  => [
                'addr'      => $addr,
                'status'    => $status,
                'count'     => $count,
                'direction' => $direction,
                'fromKey'   => $fromKey,
            ],
        ])['orders'];
    }

    /**
     * Notes   : 买入资产.
     *
     * @Date   : 2021/3/30 4:50 下午
     * @Author : <Jason.C>
     *
     * @param  string  $tokenSymbol  资产标识符
     * @param  string  $assetExec  资产来源的执行器名称
     * @param  int  $amountPerBoardlot  每一手成交的数量
     * @param  int  $minBoardlot  一次购买最少成交的数量
     * @param  int  $pricePerBoardlot  一手成交的价格
     * @param  int  $totalBoardlot  总共的出售的手数
     * @param  string  $priceExec  标价资产的合约
     * @param  string  $priceSymbol  标价资产的名字
     * @param  string  $privateKey  发布者私钥
     * @param  int  $fee
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
        string $privateKey,
        int $fee = 0
    ): string {
        $txHex = $this->client->CreateRawTradeBuyLimitTx([
            'tokenSymbol'       => $tokenSymbol,
            'assetExec'         => $assetExec,
            'amountPerBoardlot' => $amountPerBoardlot,
            'minBoardlot'       => $minBoardlot,
            'pricePerBoardlot'  => $pricePerBoardlot,
            'totalBoardlot'     => $totalBoardlot,
            'priceExec'         => $priceExec,
            'priceSymbol'       => $priceSymbol,
            'fee'               => $fee,
        ], 'trade');

        return $this->app->transaction->finalSend($txHex, $privateKey);
    }

    /**
     * Notes   : 撤销买单.
     *
     * @Date   : 2021/4/22 10:51 上午
     * @Author : <Jason.C>
     *
     * @param  string  $buyID  买单ID
     * @param  string  $privateKey  私钥
     * @param  int  $fee  手续费
     * @return string
     */
    public function buyRevoke(string $buyID, string $privateKey, int $fee = 0): string
    {
        $txHex = $this->client->CreateRawTradeRevokeBuyTx([
            'buyID' => $buyID,
            'fee'   => $fee,
        ], 'trade');

        return $this->app->transaction->finalSend($txHex, $privateKey);
    }

    /**
     * Notes   : 生成买入指定卖单卖出的token的交易.
     *
     * @Date   : 2021/4/22 11:14 上午
     * @Author : <Jason.C>
     *
     * @param  string  $sellID  买单id
     * @param  int  $boardlotCnt  买入数量，单位手
     * @param  string  $privateKey  卖家私钥
     * @param  int  $fee  交易的手续费
     * @return string
     */
    public function buySell(string $sellID, int $boardlotCnt, string $privateKey, int $fee = 0): string
    {
        $txHex = $this->client->CreateRawTradeBuyTx([
            'sellID'      => $sellID,
            'boardlotCnt' => $boardlotCnt,
            'fee'         => $fee,
        ], 'trade');

        return $this->app->transaction->finalSend($txHex, $privateKey);
    }

    /**
     * Notes   : 指定TOKEN的所有买单.
     *
     * @Date   : 2021/3/31 11:28 上午
     * @Author : <Jason.C>
     *
     * @param  string  $symbol  TOKEN 标识
     * @param  int  $status  状态
     * @param  int  $count  最多取的数量
     * @param  int  $direction  查询的方向
     * @param  string  $fromKey  开始查询的主键
     * @return array
     *
     * @throws Exception
     */
    public function buyOrders(
        string $symbol,
        int $status = 1,
        int $count = 20,
        int $direction = 0,
        string $fromKey = ''
    ): array {
        return $this->client->Query([
            'execer'   => $this->parseExecer('trade'),
            'funcName' => 'GetTokenBuyOrderByStatus',
            'payload'  => [
                'tokenSymbol' => $symbol,
                'status'      => $status,
                'count'       => $count,
                'direction'   => $direction,
                'fromKey'     => $fromKey,
            ],
        ])['orders'];
    }

    /**
     * Notes   : 查询地址对应的买单.
     *
     * @Date   : 2021/3/30 11:45 上午
     * @Author : <Jason.C>
     *
     * @param  string  $addr  地址
     * @param  array  $token  TOKEN的 SYMBOL
     * @param  int  $count  最多取的数量
     * @param  int  $direction  查询的方向
     * @param  string  $fromKey  开始查询的主键
     * @return mixed
     *
     * @throws ChainException
     */
    public function addrBuyOrder(
        string $addr,
        array $token = [],
        int $count = 20,
        int $direction = 0,
        string $fromKey = ''
    ): array {
        return $this->client->Query([
            'execer'   => $this->parseExecer('trade'),
            'funcName' => 'GetOnesBuyOrder',
            'payload'  => [
                'addr'      => $addr,
                'token'     => $token,
                'count'     => $count,
                'direction' => $direction,
                'fromKey'   => $fromKey,
            ],
        ])['orders'];
    }

    /**
     * Notes   : 分状态查询地址的买单.
     *
     * @Date   : 2021/4/22 1:24 下午
     * @Author : <Jason.C>
     *
     * @param  string  $addr  地址
     * @param  int  $status  状态 1: 未完成交易， 2： 完成的交易， 3： 撤销的交易
     * @param  int  $count  最多取的数量
     * @param  int  $direction  查询的方向
     * @param  string  $fromKey  开始查询的主键
     * @return array
     *
     * @throws ChainException
     */
    public function addrBuyOrdersByStatus(
        string $addr,
        int $status = 1,
        int $count = 20,
        int $direction = 0,
        string $fromKey = ''
    ): array {
        return $this->client->Query([
            'execer'   => $this->parseExecer('trade'),
            'funcName' => 'GetOnesBuyOrderWithStatus',
            'payload'  => [
                'addr'      => $addr,
                'status'    => $status,
                'count'     => $count,
                'direction' => $direction,
                'fromKey'   => $fromKey,
            ],
        ])['orders'];
    }

    /**
     * Notes   : 根据状态分页列出某地址的订单（包括买单卖单）.
     *
     * @Date   : 2021/4/22 1:30 下午
     * @Author : <Jason.C>
     *
     * @param  string  $addr  指定地址
     * @param  int  $status  1: 未完成交易， 2： 完成的交易， 3： 撤销的交易
     * @param  int  $count  最多取的数量
     * @param  int  $direction  查询的方向
     * @param  string  $fromKey  开始查询的主键
     * @return mixed
     *
     * @throws ChainException
     */
    public function orders(
        string $addr,
        array $tokens = [],
        int $status = 1,
        int $count = 20,
        int $direction = 0,
        string $fromKey = ''
    ) {
        return $this->client->Query([
            'execer'   => $this->parseExecer('trade'),
            'funcName' => 'GetOnesOrderWithStatus',
            'payload'  => [
                'addr'      => $addr,
                'token'     => $tokens,
                'status'    => $status,
                'count'     => $count,
                'direction' => $direction,
                'fromKey'   => $fromKey,
            ],
        ])['orders'];
    }
}
