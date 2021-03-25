<?php

namespace Jason\Chain33\Account;

use Jason\Chain33\Exceptions\ChainException;
use Jason\Chain33\Kernel\BaseClient;
use Jason\Chain33\Kernel\Utils\AddressCode;
use Jason\Chain33\Kernel\Utils\AddressValidation;
use Jason\Chain33\Kernel\Utils\PrivateKey;
use StephenHill\Base58;

/**
 * Class Client
 * @package Jason\Chain33\Account
 */
class Client extends BaseClient
{

    /**
     * Notes   : 通过私钥，获取地址
     * @Date   : 2021/3/23 2:14 下午
     * @Author : < Jason.C >
     * @param $privateKey
     * @return String
     * @throws \Jason\Chain33\Exceptions\ChainException
     */
    public function getPublicKey($privateKey): string
    {
        $privateKey = new PrivateKey($privateKey);

        $point = $privateKey->getPubKeyPoints();

        $compressedPublicKey = AddressCode::Compress($point);

        $hash = AddressCode::Hash($compressedPublicKey);

        $address = AddressCode::Encode($hash);

        if (AddressValidation::validateAddress($address)) {
            return $address;
        } else {
            throw new ChainException('the address is not valid.');
        }
    }

    /**
     * Notes   : 验证地址是否合法
     * @Date   : 2021/3/22 5:35 下午
     * @Author : < Jason.C >
     * @param $address
     * @return bool
     */
    public function validation($address): bool
    {
        return AddressValidation::validateAddress($address);
    }

    /**
     * Notes: 本地生成私钥-钱包地址
     * @Author: <C.Jason>
     * @Date  : 2020/4/30 15:01
     * @return array
     */
    public function local(): array
    {
        $config = [
            'private_key_type' => OPENSSL_KEYTYPE_EC,
            'curve_name'       => 'secp256k1',
        ];
        $pkey   = openssl_pkey_new($config);
        $detail = openssl_pkey_get_details($pkey);

        return [
            'privateKey' => '0x' . bin2hex($detail['ec']['d']),
            'address'    => $this->getAddress($detail),
        ];
    }

    /**
     * Notes: 获取钱包地址
     * @Author: <C.Jason>
     * @Date  : 2020/4/30 15:00
     * @param $detail
     * @return string
     */
    protected function getAddress(array $detail): string
    {
        $x = str_pad(bin2hex($detail['ec']['x']), 64, '0', STR_PAD_LEFT);
        $y = bin2hex($detail['ec']['y']);
        if (intval(substr($y, -1), 16) % 2 == 0) {
            $pubKey = '02' . $x;
        } else {
            $pubKey = '03' . $x;
        }

        $ripem160    = hash('ripemd160', hex2bin(hash('sha256', hex2bin($pubKey))));
        $with_prefix = '00' . $ripem160;
        $checksum    = hash('sha256', hex2bin(hash('sha256', hex2bin($with_prefix))));
        $address     = $with_prefix . substr($checksum, 0, 8);

        return (new Base58())->encode(hex2bin($address));
    }

    /**
     * Notes: 创建一个账户
     * @Author: <C.Jason>
     * @Date  : 2020/3/18 21:34
     * @param  string  $label  账户标签
     * @return string 账户地址
     * @throws \Jason\Chain33\Exceptions\ConfigException
     */
    public function create(string $label): string
    {
        $this->walletUnlock();

        return $this->client->NewAccount([
            'label' => $label,
        ])['acc']['addr'];
    }

    /**
     * Notes: 获取账户列表
     * @Author: <C.Jason>
     * @Date  : 2020/3/18 21:34
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
     * Notes: 合并账户余额
     * @Author: <C.Jason>
     * @Date  : 2020/3/18 21:35
     * @param  string  $to  合并钱包上的所有余额到一个账户地址
     * @return array|null
     * @throws \Jason\Chain33\Exceptions\ConfigException
     */
    public function merge(string $to): ?array
    {
        $this->walletUnlock();

        return $this->client->MergeBalance([
            'to' => $to,
        ])['hashes'];
    }

    /**
     * Notes: 导入私钥
     * @Author: <C.Jason>
     * @Date  : 2020/4/30 17:21
     * @param  string  $lable       账户标签
     * @param  string  $privateKey  账户私钥
     * @return string
     * @throws \Jason\Chain33\Exceptions\ConfigException
     */
    public function import(string $lable, string $privateKey): string
    {
        $this->walletUnlock();

        return $this->client->ImportPrivkey([
            'privkey' => $privateKey,
            'label'   => $lable,
        ])['acc']['addr'];
    }

    /**
     * Notes: 导出私钥
     * @Author: <C.Jason>
     * @Date  : 2020/3/18 21:36
     * @param  string  $addr  待导出私钥的账户地址
     * @return string
     * @throws \Jason\Chain33\Exceptions\ConfigException
     */
    public function dump(string $addr): string
    {
        $this->walletUnlock();

        return $this->client->DumpPrivkey([
            'data' => $addr,
        ])['data'];
    }

}
