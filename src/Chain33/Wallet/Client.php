<?php

namespace Jason\Chain33\Wallet;

use FurqanSiddiqui\BIP39\BIP39;
use Jason\Chain33\Kernel\BaseClient;

/**
 * Class Client
 * @package Jason\Chain33\BaseClient
 */
class Client extends BaseClient
{

    /**
     * Notes   : 本地生成一个 bip39 标准的 seed
     * @Date   : 2021/3/24 10:08 上午
     * @Author : < Jason.C >
     * @param  int  $len
     * @return string
     * @throws \FurqanSiddiqui\BIP39\Exception\MnemonicException
     * @throws \FurqanSiddiqui\BIP39\Exception\WordListException
     */
    public function localSeed(int $len = 15): string
    {
        $mnemonic = BIP39::Generate($len);

        return implode(' ', $mnemonic->words);
    }

    /**
     * Notes   : 生成SEED
     * @Date   : 2021/3/21 12:10 下午
     * @Author : < Jason.C >
     * @param  int  $lang  0 english 1 中文
     * @return string
     */
    public function genSeed(int $lang = 0): string
    {
        return $this->client->GenSeed([
            'lang' => $lang,
        ])['seed'];
    }

    /**
     * Notes: 创建一个钱包
     * @Author: <C.Jason>
     * @Date  : 2020/4/30 17:33
     * @param  string  $password  钱包密码
     * @return bool
     */
    public function create(string $password): bool
    {
        $seed = $this->genSeed();

        return $this->client->SaveSeed([
            'seed'   => $seed,
            'passwd' => $password,
        ])['isOK'];
    }

    /**
     * Notes: 获取钱包助记词
     * @Author: <C.Jason>
     * @Date  : 2020/4/30 17:34
     * @return string
     * @throws \Jason\Chain33\Exceptions\ConfigException
     */
    public function getSeed(): string
    {
        $this->walletUnlock();

        return $this->client->GetSeed([
            'passwd' => $this->config['password'],
        ])['seed'];
    }

    /**
     * Notes: 修改密码
     * @Author: <C.Jason>
     * @Date  : 2020/4/30 17:36
     * @param  string  $old  旧密码
     * @param  string  $new  新密码
     * @return bool
     */
    public function password(string $old, string $new): bool
    {
        return $this->client->SetPasswd([
            'oldPass' => $old,
            'newPass' => $new,
        ])['isOK'];
    }

    /**
     * Notes: 钱包状态
     * @Author: <C.Jason>
     * @Date  : 2020/3/18 21:38
     * @return array
     */
    public function status(): array
    {
        return $this->client->GetWalletStatus();
    }

    /**
     * Notes: 设置交易费用
     * @Author: <C.Jason>
     * @Date  : 2020/3/18 21:38
     * @param  int  $amount
     * @return bool
     * @throws \Jason\Chain33\Exceptions\ConfigException
     */
    public function setFee(int $amount): bool
    {
        $this->walletUnlock();

        return $this->client->SetTxFee([
            'amount' => $amount,
        ])['isOK'];
    }

    /**
     * Notes: 获取钱包交易列表
     * @Author: <C.Jason>
     * @Date  : 2020/4/30 17:44
     * @param  string  $fromTx     Sprintf(“%018d”, height*100000 + index)，表示从高度 height 中的 index
     *                             开始获取交易列表；第一次传参为空，获取最新的交易
     * @param  int     $count      获取交易列表的个数
     * @param  int     $mode       获取交易列表的个数
     * @param  int     $direction  查找方式；0，获取最新的交易数据，倒叙排序，在交易列表中时间高度是递减的；1，正序排序，按照时间，区块高度增加的方向获取交易列表
     * @return array
     */
    public function txList(string $fromTx, int $count, int $mode, int $direction = 0): array
    {
        return $this->client->WalletTxList([
            'fromTx'    => $fromTx,
            'count'     => $count,
            'direction' => $direction,
            'mode'      => $mode,
        ])['txDetails'];
    }

    /**
     * Notes   : 查询手续费，以及交易数量
     * @Date   : 2021/3/29 5:36 下午
     * @Author : < Jason.C >
     * @return array
     */
    public function totalFee(): array
    {
        $lastHash = $this->app->chain->lastHeader()['hash'];

        return $this->client->QueryTotalFee([
            'keys' => [
                base64_encode('TotalFeeKey:' . hex2bin($this->parseHexString($lastHash))),
            ],
        ]);
    }

    /**
     * Notes: 合并账户余额
     * @Author: <C.Jason>
     * @Date  : 2020/5/14 1:31 下午
     * @param  string  $to  合并钱包上的所有余额到一个账户地址
     * @return mixed
     * @throws \Jason\Chain33\Exceptions\ConfigException
     */
    public function merge(string $to): ?array
    {
        $this->walletUnlock();

        return $this->client->MergeBalance([
            'to' => $to,
        ])['hashes'];
    }

}
