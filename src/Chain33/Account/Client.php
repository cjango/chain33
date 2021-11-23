<?php

namespace Jason\Chain33\Account;

use Exception;
use Jason\Chain33\Exceptions\ConfigException;
use Jason\Chain33\Kernel\BaseClient;
use Jason\Chain33\Kernel\Utils\Base58;

/**
 * Class Client.
 */
class Client extends BaseClient
{
    /**
     * Notes   : 获取钱包地址
     *
     * @Author : <C.Jason>
     * @Date   : 2020/4/30 15:00
     *
     * @param  array  $detail  secp256k1 的坐标
     * @return string
     *
     * @throws Exception
     */
    protected function getAddress(array $detail): string
    {
        $x = str_pad(bin2hex($detail['ec']['x']), 64, '0', STR_PAD_LEFT);
        $y = bin2hex($detail['ec']['y']);
        if (intval(substr($y, -1), 16) % 2 == 0) {
            $pubKey = '02'.$x;
        } else {
            $pubKey = '03'.$x;
        }

        $ripem160    = hash('ripemd160', hex2bin(hash('sha256', hex2bin($pubKey))));
        $with_prefix = '00'.$ripem160;
        $checksum    = hash('sha256', hex2bin(hash('sha256', hex2bin($with_prefix))));
        $address     = $with_prefix.substr($checksum, 0, 8);

        return Base58::encode($address);
    }

    /**
     * Notes: 创建一个账户.
     *
     * @Author: <C.Jason>
     * @Date  : 2020/3/18 21:34
     *
     * @param  string  $label  账户标签
     * @return string 账户地址
     *
     * @throws ConfigException
     */
    public function create(string $label): string
    {
        $this->walletUnlock();

        return $this->client->NewAccount([
            'label' => $label,
        ])['acc']['addr'];
    }

    /**
     * Notes: 获取账户列表.
     *
     * @Author: <C.Jason>
     * @Date  : 2020/3/18 21:34
     *
     * @param  bool  $withoutBalance  返回 label 和 addr 信息
     * @return array
     */
    public function get(bool $withoutBalance = false): array
    {
        return $this->client->GetAccounts([
            'withoutBalance' => $withoutBalance,
        ])['wallets'];
    }

    /**
     * Notes: 修改账户标签.
     *
     * @Author: <C.Jason>
     * @Date  : 2020/3/18 21:35
     *
     * @param  string  $address  要修改的地址
     * @param  string  $label  新的标签
     * @return mixed
     */
    public function setLabel(string $address, string $label)
    {
        return $this->client->SetLabl([
            'addr'  => $address,
            'label' => $label,
        ]);
    }

    /**
     * Notes: 导入私钥.
     *
     * @Author: <C.Jason>
     * @Date  : 2020/4/30 17:21
     *
     * @param  string  $label  账户标签
     * @param  string  $privateKey  账户私钥
     * @return string
     *
     * @throws ConfigException
     */
    public function import(string $label, string $privateKey): string
    {
        $this->walletUnlock();

        return $this->client->ImportPrivkey([
            'privkey' => $privateKey,
            'label'   => $label,
        ])['acc']['addr'];
    }

    /**
     * Notes: 导出私钥.
     *
     * @Author: <C.Jason>
     * @Date  : 2020/3/18 21:36
     *
     * @param  string  $addr  待导出私钥的账户地址
     * @return string
     *
     * @throws ConfigException
     */
    public function dump(string $addr): string
    {
        $this->walletUnlock();

        return $this->client->DumpPrivkey([
            'data' => $addr,
        ])['data'];
    }
}
