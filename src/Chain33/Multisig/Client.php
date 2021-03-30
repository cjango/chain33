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
     * Notes   : 创建多重签名账户
     * @Date   : 2021/3/30 12:17 下午
     * @Author : < Jason.C >
     */
    public function create()
    {
        $txHex = $this->client->MultiSigAccCreateTx([
            'owners'         => [

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
     * @Date   : 2021/3/30 1:23 下午
     * @Author : < Jason.C >
     */
    public function operateRequiredWeight()
    {
        $txHex = $this->client->MultiSigAccOperateTx([
            'multiSigAccAddr'   => '',
            'newRequiredWeight' => '',
            'operateFlag'       => '',
        ], 'multisig');

        return $this->app->transaction->finalSend($txHex, $privateKey);
    }

    public function operateDailyLimit()
    {
        $txHex = $this->client->MultiSigAccOperateTx([
            'multiSigAccAddr' => '',
            'operateFlag'     => '',
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
     * @return mixed
     */
    public function count(): int
    {
        return $this->client->Query([
            'execer'   => 'multisig',
            'funcName' => 'MultiSigAccCount',
        ]);
    }

    /**
     * Notes   : 获取多重签名地址
     * @Date   : 2021/3/30 1:25 下午
     * @Author : < Jason.C >
     */
    public function accounts(): array
    {
        return $this->client->Query([
            'execer'   => 'multisig',
            'funcName' => 'MultiSigAccounts',
            'payload'  => [
                'start' => '',
                'end'   => '',
            ],
        ]);
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
     * 查询多重签名账户指定资产当日免密余额
     */

    public function UnSpentToday(string $multiSigAddr): array
    {
        return $this->client->Query([
            'execer'   => 'multisig',
            'funcName' => 'MultiSigAccUnSpentToday',
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
     * @Date   : 2021/3/30 1:30 下午
     * @Author : < Jason.C >
     */
    public function address(string $multiSigAccAddr)
    {
        return $this->client->Query([
            'execer'   => 'multisig',
            'funcName' => 'MultiSigAccAllAddress',
            'payload'  => [
                'multiSigAccAddr' => $multiSigAccAddr,
            ],
        ])['address'];
    }

    /**
     * Notes   : 查询owner地址拥有的多重签名账户列表
     * @Date   : 2021/3/30 1:31 下午
     * @Author : < Jason.C >
     */
    public function owner(string $owner)
    {
        return $this->client->MultiSigAddresList([
            'data' => $owner,
        ], 'multisig')['items'];
    }

    public function addOwner($owner)
    {
        $txHex = $this->client->MultiSigOwnerOperateTx([
            'multiSigAccAddr' => $owner,
            'newOwner'        => $owner,
            'newWeight'       => $owner,
            'operateFlag'     => 1,
        ], 'multisig');

        return $this->app->transaction->finalSend($txHex, $privateKey);
    }

    public function deleteOwner($owner)
    {
        $txHex = $this->client->MultiSigOwnerOperateTx([
            'multiSigAccAddr' => $owner,
            'oldOwner'        => $owner,
            'operateFlag'     => 1,
        ], 'multisig');

        return $this->app->transaction->finalSend($txHex, $privateKey);
    }

    public function modifyOwner($owner)
    {
        $txHex = $this->client->MultiSigOwnerOperateTx([
            'multiSigAccAddr' => $owner,
            'oldOwner'        => $owner,
            'newWeight'       => $owner,
            'operateFlag'     => 3,
        ], 'multisig');

        return $this->app->transaction->finalSend($txHex, $privateKey);
    }

    /**
     * Notes   : 多重签名账户owner替换
     * @Date   : 2021/3/30 1:44 下午
     * @Author : < Jason.C >
     * @param $owner
     */
    public function repliceOwner($owner)
    {
        $txHex = $this->client->MultiSigOwnerOperateTx([
            'multiSigAccAddr' => $owner,
            'oldOwner'        => $owner,
            'newOwner'        => $owner,
            'operateFlag'     => 4,
        ], 'multisig');

        return $this->app->transaction->finalSend($txHex, $privateKey);
    }

    /**
     * Notes   : 多重签名账户资产转入
     * @Date   : 2021/3/30 1:37 下午
     * @Author : < Jason.C >
     * @param $owner
     */
    public function transfer($owner)
    {
        $txHex = $this->client->MultiSigAccTransferInTx([
            'symbol'   => $owner,
            'execname' => $owner,
            'note'     => $owner,
            'to'       => 4,
            'amount'   => 1,
        ], 'multisig');

        return $this->app->transaction->finalSend($txHex, $privateKey);
    }

    /**
     * Notes   : 多重签名账户资产转出
     * @Date   : 2021/3/30 1:44 下午
     * @Author : < Jason.C >
     * @param $owner
     */
    public function withdraw($owner)
    {
        $txHex = $this->client->MultiSigAccTransferOutTx([
            'symbol'   => $owner,
            'execname' => $owner,
            'note'     => $owner,
            'to'       => 4,
            'from'     => 4,
            'amount'   => 1,
        ], 'multisig');

        return $this->app->transaction->finalSend($txHex, $privateKey);
    }

    public function confirm()
    {
        $txHex = $this->client->MultiSigConfirmTx([
            'multiSigAccAddr' => $owner,
            'txId'            => $owner,
            'confirmOrRevoke' => 1,
        ], 'multisig');

        return $this->app->transaction->finalSend($txHex, $privateKey);
    }

    /**
     * Notes   : 获取多重签名账户交易数
     * @Date   : 2021/3/30 1:40 下午
     * @Author : < Jason.C >
     * @param $addr
     * @return mixed
     */
    public function MultiSigAccTxCount($addr)
    {
        return $this->client->Query([
            'execer'   => 'multisig',
            'funcName' => 'MultiSigAccTxCount',
            'payload'  => [
                'multiSigAccAddr' => $addr,
            ],
        ]);
    }

    /**
     * Notes   : 获取指定区间的指定状态的多重签名交索引易
     * @Date   : 2021/3/30 1:43 下午
     * @Author : < Jason.C >
     * @return mixed
     */
    public function MultiSigTxids()
    {
        return $this->client->Query([
            'execer'   => 'multisig',
            'funcName' => 'MultiSigTxids',
            'payload'  => [
                'multiSigAddr' => $addr,
                'fromTxId'     => $addr,
                'toTxId'       => $addr,
                'pending'      => $addr,
                'executed'     => $addr,
            ],
        ]);
    }

    /**
     * Notes   : 获取多重签名交信息
     * @Date   : 2021/3/30 1:43 下午
     * @Author : < Jason.C >
     * @return mixed
     */
    public function MultiSigTxInfo()
    {
        return $this->client->Query([
            'execer'   => 'multisig',
            'funcName' => 'MultiSigTxInfo',
            'payload'  => [
                'multiSigAddr' => $addr,
                'txId'         => $addr,
            ],
        ]);
    }

    /**
     * Notes   : 获取指定交易被确认的权重信息
     * @Date   : 2021/3/30 1:43 下午
     * @Author : < Jason.C >
     * @return int
     */
    public function MultiSigTxConfirmedWeight(): int
    {
        return $this->client->Query([
            'execer'   => 'multisig',
            'funcName' => 'MultiSigTxConfirmedWeight',
            'payload'  => [
                'multiSigAddr' => $addr,
                'txId'         => $addr,
            ],
        ]);
    }

}
