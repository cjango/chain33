<?php

namespace Jason\Chain33\Multisig;

use Jason\Chain33\Kernel\BaseClient;

/**
 * Class Client
 * @package Jason\Chain33\Multisig
 */
class Client extends BaseClient
{

    /**
     * Notes   : 创建多重签名账户 【这里只用作存根了，具体使用 Chain33::Client()->MultiSigAccCreateTx() 来实现吧】
     * @Date   : 2021/3/30 2:12 下午
     * @Author : < Jason.C >
     * @return string
     */
    public function create(): string
    {
        $txHex = $this->client->MultiSigAccCreateTx([
            'owners'         => [
                [
                    'ownerAddr' => '',
                    'weight'    => '',
                ],
                [
                    'ownerAddr' => '',
                    'weight'    => '',
                ],
            ],
            'requiredWeight' => '',
            'dailyLimit'     => [
                'symbol'     => '',
                'execer'     => '',
                'dailyLimit' => '',
            ],
        ], 'multisig');

        return $this->app->transaction->finalSend($txHex, $privateKey);
    }

    /**
     * Notes   : 多重签名账户修改RequiredWeight值
     * @Date   : 2021/3/30 2:09 下午
     * @Author : < Jason.C >
     * @param  string  $multiSigAccAddr
     * @param  int     $newWeight
     * @param  string  $multiSigAccAddr
     * @return string
     */
    public function operateRequiredWeight(string $multiSigAccAddr, int $newWeight, string $privateKey): string
    {
        $txHex = $this->client->MultiSigAccOperateTx([
            'multiSigAccAddr'   => $multiSigAccAddr,
            'newRequiredWeight' => $newWeight,
            'operateFlag'       => true,
        ], 'multisig');

        return $this->app->transaction->finalSend($txHex, $privateKey);
    }

    /**
     * Notes   : 多重签名账户修改DailyLimit每日限额
     * @Date   : 2021/3/30 2:12 下午
     * @Author : < Jason.C >
     * @param  string  $multiSigAccAddr
     * @param  array   $dailyLimit
     * @param  string  $privateKey
     * @return string
     */
    public function operateDailyLimit(string $multiSigAccAddr, array $dailyLimit, string $privateKey): string
    {
        $txHex = $this->client->MultiSigAccOperateTx([
            'multiSigAccAddr' => $multiSigAccAddr,
            'operateFlag'     => false,
            'dailyLimit'      => [
                'symbol'     => '',
                'execer'     => '',
                'dailyLimit' => '',
            ],
        ], 'multisig');

        return $this->app->transaction->finalSend($txHex, $privateKey);
    }

    /**
     * Notes   : 获取已经创建的多重签名账户个数
     * @Date   : 2021/3/30 1:25 下午
     * @Author : < Jason.C >
     * @return int
     */
    public function count(): int
    {
        return $this->client->Query([
            'execer'   => 'multisig',
            'funcName' => 'MultiSigAccCount',
        ])['data'];
    }

    /**
     * Notes   : 获取多重签名地址
     * @Date   : 2021/3/30 2:05 下午
     * @Author : < Jason.C >
     * @param  int  $start  多重签名账户index索引，从0开始
     * @param  int  $end    多重签名账户index索引，end>=start && end< MultiSigAccCount获取的值
     * @return array
     */
    public function accounts(int $start, int $end): array
    {
        return $this->client->Query([
            'execer'   => 'multisig',
            'funcName' => 'MultiSigAccounts',
            'payload'  => [
                'start' => $start,
                'end'   => $end,
            ],
        ])['address'];
    }

    /**
     * Notes   : 获取多重签名账户信息
     * @Date   : 2021/3/30 1:27 下午
     * @Author : < Jason.C >
     * @param  string  $multiSigAccAddr
     * @return array
     */
    public function info(string $multiSigAccAddr): array
    {
        return $this->client->Query([
            'execer'   => 'multisig',
            'funcName' => 'MultiSigAccountInfo',
            'payload'  => [
                'multiSigAccAddr' => $multiSigAccAddr,
            ],
        ]);
    }

    /**
     * Notes   : 查询多重签名账户指定资产当日免密余额
     * @Date   : 2021/3/30 2:03 下午
     * @Author : < Jason.C >
     * @param  string  $multiSigAddr  多重签名账户地址
     * @param  bool    $isAll         是否所有资产
     * @param  string  $execer        资产信息
     * @param  string  $symbol        资产信息
     * @return array
     */
    public function unSpentToday(
        string $multiSigAddr,
        bool $isAll = true,
        string $execer = '',
        string $symbol = ''
    ): array {
        return $this->client->Query([
            'execer'   => 'multisig',
            'funcName' => 'MultiSigAccUnSpentToday',
            'payload'  => [
                'multiSigAddr' => $multiSigAddr,
                'assets'       => [
                    'execer' => $execer,
                    'symbol' => $symbol,
                ],
                'isAll'        => $isAll,
            ],
        ]);
    }

    /**
     * Notes   : 查询多重签名账户指定资产信息
     * @Date   : 2021/3/30 1:30 下午
     * @Author : < Jason.C >
     * @return mixed
     */
    public function assets()
    {
        return $this->client->Query([
            'execer'   => 'multisig',
            'funcName' => 'MultiSigAccAssets',
            'payload'  => [
                'multiSigAddr' => $multiSigAddr,
                'assets'       => [
                    'execer' => '',
                    'symbol' => '',
                ],
                'isAll'        => '',
            ],
        ]);
    }

    /**
     * Notes   : 查询指定地址创建的多重签名账户列表
     * @Date   : 2021/3/30 2:16 下午
     * @Author : < Jason.C >
     * @param  string  $creator
     * @return array
     */
    public function address(string $creator): array
    {
        return $this->client->Query([
            'execer'   => 'multisig',
            'funcName' => 'MultiSigAccAllAddress',
            'payload'  => [
                'multiSigAccAddr' => $creator,
            ],
        ])['address'];
    }

    /**
     * Notes   : 查询owner地址拥有的多重签名账户列表
     * @Date   : 2021/3/30 2:16 下午
     * @Author : < Jason.C >
     * @param  string  $owner
     * @return array
     */
    public function owner(string $owner): array
    {
        return $this->client->MultiSigAddresList([
            'data' => $owner,
        ], 'multisig')['items'];
    }

    /**
     * Notes   : 多重签名账户增加owner
     * @Date   : 2021/3/30 2:16 下午
     * @Author : < Jason.C >
     * @param  string  $multiSigAccAddr
     * @param  string  $newOwner
     * @param  int     $newWeight
     * @param  string  $privateKey
     * @return string
     */
    public function addOwner(string $multiSigAccAddr, string $newOwner, int $newWeight, string $privateKey): string
    {
        $txHex = $this->client->MultiSigOwnerOperateTx([
            'multiSigAccAddr' => $multiSigAccAddr,
            'newOwner'        => $newOwner,
            'newWeight'       => $newWeight,
            'operateFlag'     => 1,
        ], 'multisig');

        return $this->app->transaction->finalSend($txHex, $privateKey);
    }

    /**
     * Notes   : 多重签名账户删除owner
     * @Date   : 2021/3/30 2:20 下午
     * @Author : < Jason.C >
     * @param  string  $multiSigAccAddr
     * @param  string  $oldOwner
     * @param  string  $privateKey
     * @return string
     */
    public function deleteOwner(string $multiSigAccAddr, string $oldOwner, string $privateKey): string
    {
        $txHex = $this->client->MultiSigOwnerOperateTx([
            'multiSigAccAddr' => $multiSigAccAddr,
            'oldOwner'        => $oldOwner,
            'operateFlag'     => 1,
        ], 'multisig');

        return $this->app->transaction->finalSend($txHex, $privateKey);
    }

    /**
     * Notes   : 多重签名账户owner权重修改
     * @Date   : 2021/3/30 2:21 下午
     * @Author : < Jason.C >
     * @param  string  $multiSigAccAddr
     * @param  string  $oldOwner
     * @param  int     $newWeight
     * @param  string  $privateKey
     * @return string
     */
    public function modifyOwner(string $multiSigAccAddr, string $oldOwner, int $newWeight, string $privateKey): string
    {
        $txHex = $this->client->MultiSigOwnerOperateTx([
            'multiSigAccAddr' => $multiSigAccAddr,
            'oldOwner'        => $oldOwner,
            'newWeight'       => $newWeight,
            'operateFlag'     => 3,
        ], 'multisig');

        return $this->app->transaction->finalSend($txHex, $privateKey);
    }

    /**
     * Notes   : 多重签名账户owner替换
     * @Date   : 2021/3/30 2:22 下午
     * @Author : < Jason.C >
     * @param  string  $multiSigAccAddr
     * @param  string  $oldOwner
     * @param  string  $newOwner
     * @param  string  $privateKey
     * @return string
     */
    public function replaceOwner(
        string $multiSigAccAddr,
        string $oldOwner,
        string $newOwner,
        string $privateKey
    ): string {
        $txHex = $this->client->MultiSigOwnerOperateTx([
            'multiSigAccAddr' => $multiSigAccAddr,
            'oldOwner'        => $oldOwner,
            'newOwner'        => $newOwner,
            'operateFlag'     => 4,
        ], 'multisig');

        return $this->app->transaction->finalSend($txHex, $privateKey);
    }

    /**
     * Notes   : 多重签名账户资产转入
     * @Date   : 2021/3/30 2:23 下午
     * @Author : < Jason.C >
     * @param  string  $symbol    资产标识
     * @param  string  $execname  资产执行器名
     * @param  string  $note      转账说明
     * @param  string  $to        收账地址，必须是多重签名地址
     * @param  int     $amount    转入的资产额度
     * @return string
     */
    public function rechage(string $symbol, string $execname, string $note, string $to, int $amount): string
    {
        $txHex = $this->client->MultiSigAccTransferInTx([
            'symbol'   => $symbol,
            'execname' => $execname,
            'note'     => $note,
            'to'       => $to,
            'amount'   => $amount,
        ], 'multisig');

        return $this->app->transaction->finalSend($txHex, $privateKey);
    }

    /**
     * Notes   : 多重签名账户资产转出
     * @Date   : 2021/3/30 2:24 下午
     * @Author : < Jason.C >
     * @param  string  $symbol    资产标识
     * @param  string  $execname  资产执行器名
     * @param  string  $note      转账说明
     * @param  string  $to        收账地址，必须是非多重签名地址
     * @param  string  $from      出账地址，必须是多重签名地址
     * @param  int     $amount    转入的资产额度
     * @return string
     */
    public function withdraw(
        string $symbol,
        string $execname,
        string $note,
        string $to,
        string $from,
        int $amount
    ): string {
        $txHex = $this->client->MultiSigAccTransferOutTx([
            'symbol'   => $symbol,
            'execname' => $execname,
            'note'     => $note,
            'to'       => $to,
            'from'     => $from,
            'amount'   => $amount,
        ], 'multisig');

        return $this->app->transaction->finalSend($txHex, $privateKey);
    }

    /**
     * Notes   : 多重签名账户交易确认
     * @Date   : 2021/3/30 2:27 下午
     * @Author : < Jason.C >
     * @param  string  $multiSigAccAddr  多重签名地址
     * @param  int     $txId             需要确认或者撤销的交易index，从0开始
     * @param  bool    $confirm          确认/撤销交易。true：确认交易
     * @return string
     */
    public function confirm(string $multiSigAccAddr, int $txId, bool $confirm = true): string
    {
        $txHex = $this->client->MultiSigConfirmTx([
            'multiSigAccAddr' => $multiSigAccAddr,
            'txId'            => $txId,
            'confirmOrRevoke' => $confirm,
        ], 'multisig');

        return $this->app->transaction->finalSend($txHex, $privateKey);
    }

    /**
     * Notes   : 获取多重签名账户交易数
     * @Date   : 2021/3/30 1:40 下午
     * @Author : < Jason.C >
     * @param  string  $multiSigAccAddr  多重签名账户地址
     * @return int
     */
    public function txCount(string $multiSigAccAddr): int
    {
        return $this->client->Query([
            'execer'   => 'multisig',
            'funcName' => 'MultiSigAccTxCount',
            'payload'  => [
                'multiSigAccAddr' => $multiSigAccAddr,
            ],
        ])['data'];
    }

    /**
     * Notes   : 获取指定区间的指定状态的多重签名交索引易
     * @Date   : 2021/3/30 2:31 下午
     * @Author : < Jason.C >
     * @param  string  $multiSigAddr  多重签名账户地址
     * @param  int     $fromTxId      多重签名账户交易索引值，fromTxId>=0
     * @param  int     $toTxId        多重签名账户交易索引,toTxId< MultiSigAccTxCount 获取的交易数
     * @param  bool    $pending       未执行的交易
     * @param  bool    $executed      已执行的交易
     * @return array
     */
    public function txIds(string $multiSigAddr, int $fromTxId, int $toTxId, bool $pending, bool $executed): array
    {
        return $this->client->Query([
            'execer'   => 'multisig',
            'funcName' => 'MultiSigTxids',
            'payload'  => [
                'multiSigAddr' => $multiSigAddr,
                'fromTxId'     => $fromTxId,
                'toTxId'       => $toTxId,
                'pending'      => $pending,
                'executed'     => $executed,
            ],
        ])['txids'];
    }

    /**
     * Notes   : 获取多重签名交易信息
     * @Date   : 2021/3/30 2:34 下午
     * @Author : < Jason.C >
     * @param  string  $multiSigAddr  多重签名账户地址
     * @param  int     $txId          多重签名账户交易索引值，fromTxId>=0
     * @return mixed
     */
    public function txInfo(string $multiSigAddr, int $txId)
    {
        return $this->client->Query([
            'execer'   => 'multisig',
            'funcName' => 'MultiSigTxInfo',
            'payload'  => [
                'multiSigAddr' => $multiSigAddr,
                'txId'         => $txId,
            ],
        ]);
    }

    /**
     * Notes   : 获取指定交易被确认的权重信息
     * @Date   : 2021/3/30 2:35 下午
     * @Author : < Jason.C >
     * @param  string  $multiSigAddr  多重签名账户地址
     * @param  int     $txId          多重签名账户交易索引值，0 <= fromTxId < MultiSigAccTxCount 获取的交易数
     * @return int
     */
    public function txWeight(string $multiSigAddr, int $txId): int
    {
        return $this->client->Query([
            'execer'   => 'multisig',
            'funcName' => 'MultiSigTxConfirmedWeight',
            'payload'  => [
                'multiSigAddr' => $multiSigAddr,
                'txId'         => $txId,
            ],
        ]);
    }

}
