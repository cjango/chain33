<?php

namespace Jason\Chain33\ParaCross;

use Jason\Chain33\Kernel\BaseClient;

/**
 * Class Client.
 */
class Client extends BaseClient
{
    /**
     * Notes   : 跨链资产转移接口.
     *
     * @Date   : 2021/3/23 3:50 下午
     * @Author : <Jason.C>
     *
     * @param  string  $assetExec  资产原生合约，比如coins,token
     * @param  string  $assetSymbol  资产符号，比如bty, ccny
     * @param  int  $amount  转移资产数量，精确到10^8
     * @param  string  $to  可选，目标地址，缺省为交易签名地址
     * @param  string  $note  可选，转移备注
     * @return mixed
     *
     * @throws \Jason\Chain33\Exceptions\ChainException
     */
    public function crossAssetTransfer(
        string $assetExec,
        string $assetSymbol,
        int $amount,
        string $to = '',
        string $note = ''
    ) {
        return $this->client->CreateTransaction([
            'execer'     => $this->parseExecer('paracross'),
            'actionName' => 'CrossAssetTransfer',
            'payload'    => [
                'assetExec'   => $assetExec,
                'assetSymbol' => $assetSymbol,
                'amount'      => $amount,
                'to'          => $to,
                'note'        => $note,
            ],
        ]);
    }

    /**
     * Notes   : 查询资产转移是否成功接口
     *           只能在主链上查询.
     *
     * @Date   : 2021/3/23 3:52 下午
     * @Author : <Jason.C>
     *
     * @param $txHash
     * @return array
     */
    public function result($txHash): array
    {
        return $this->client->CreateTransaction([
            'execer'   => 'paracross',
            'funcName' => 'GetAssetTxResult',
            'payload'  => [
                'data' => $txHash,
            ],
        ]);
    }

    /**
     * Notes   : 平行链跨资产转到合约接口.
     *
     * @Date   : 2021/3/23 3:47 下午
     * @Author : <Jason.C>
     *
     * @param  int  $amount  转移数量
     * @param  string  $token  转移资产符号,默认原生合约就是paracross，所以只填符号即可
     * @return array
     *
     * @throws \Jason\Chain33\Exceptions\ChainException
     */
    public function transferToExec(int $amount, string $token): array
    {
        return $this->client->CreateTransaction([
            'execer'     => 'paracross',
            'actionName' => 'TransferToExec',
            'payload'    => [
                'execName'  => $this->parseExecer('trade'),
                'to'        => $this->app->miner->execer($this->parseExecer('trade')),
                'amount'    => $amount,
                'cointoken' => 'coins.'.$token,
            ],
        ]);
    }

    /**
     * Notes   : 查询平行链共识高度.
     *
     * @Date   : 2021/3/23 3:42 下午
     * @Author : <Jason.C>
     *
     * @param  string  $paraName
     * @return array
     */
    public function title(string $paraName = ''): array
    {
        return $this->client->Query([
            'execer'   => 'paracross',
            'funcName' => 'GetTitle',
            'payload'  => [
                'title' => $paraName,
            ],
        ]);
    }

    /**
     * Notes   : 查询平行链某高度共识情况.
     *
     * @Date   : 2021/3/23 3:40 下午
     * @Author : <Jason.C>
     *
     * @param  string  $paraName
     * @param  int  $height
     * @return array
     */
    public function titleHeight(int $height, string $paraName = ''): array
    {
        return $this->client->Query([
            'execer'   => 'paracross',
            'funcName' => 'GetTitleHeight',
            'payload'  => [
                'title'  => $paraName,
                'height' => $height,
            ],
        ]);
    }

    /**
     * Notes   : 查询平行链高度和共识高度.
     *
     * @Date   : 2021/3/23 3:38 下午
     * @Author : <Jason.C>
     *
     * @param  string  $paraName
     * @return array
     */
    public function height(string $paraName = ''): array
    {
        return $this->client->Query([
            'execer'   => 'paracross',
            'funcName' => 'GetHeight',
            'payload'  => [
                'data' => $paraName,
            ],
        ]);
    }

    /**
     * Notes   : 查询平行链高度和主链匹配高度.
     *
     * @Date   : 2021/3/23 3:38 下午
     * @Author : <Jason.C>
     *
     * @param  int  $start
     * @param  int  $end
     * @return mixed
     */
    public function main(int $start, int $end)
    {
        return $this->client->Query([
            'execer'   => 'paracross',
            'funcName' => 'GetHeight',
            'payload'  => [
                'start'    => (string) $start,
                'end'      => (string) $end,
                'isDetail' => false,
            ],
        ]);
    }
}
