<?php

namespace Jason\Chain33\Evm;

use Jason\Chain33\Kernel\BaseClient;

/**
 * Class Client
 * @package Jason\Chain33\Evm
 */
class Client extends BaseClient
{

    /**
     * Notes   : 部署合约
     * @Date   : 2021/1/27 2:12 下午
     * @Author : < Jason.C >
     * @param  string  $code        部署合约的合约代码
     * @param  string  $abi         部署合约的ABI代码
     * @param  string  $alias       部署新合约时的合约别名，方便识别不同合约
     * @param  string  $privateKey  创建合约的用户的私钥
     * @param  string  $note        本次交易的备注信息
     * @param  int     $fee         交易手续费，这里不能设置为0，要大于合约的gas消耗
     * @return string
     * @throws \Jason\Chain33\Exceptions\ConfigException|\Jason\Chain33\Exceptions\ChainException
     */
    public function deploy(
        string $code,
        string $abi,
        string $alias,
        string $privateKey,
        string $note = '',
        int $fee = 0
    ): string {

        $this->walletUnlock();

        $txHex = $this->client->CreateTransaction([
            'execer'     => $this->parseExecer('evm'),
            'actionName' => 'CreateCall',
            'payload'    => [
                'isCreate' => true,
                'code'     => $code,
                'abi'      => $abi,
                'alias'    => $alias,
                'note'     => $note,
                'fee'      => $fee,
            ],
        ]);

        return $this->app->transaction->finalSend($txHex, $privateKey);
    }

    /**
     * Notes   : 调用合约
     * @Date   : 2021/1/27 2:17 下午
     * @Author : < Jason.C >
     * @param  string  $addr        调用的合约地址
     * @param  string  $abi         合约的ABI代码
     * @param  string  $privateKey  调用合约的签名
     * @param  int     $amount      合约调用时，如果需要传递金额，通过这个参数
     * @param  string  $note        本次交易的备注信息
     * @param  int     $fee         交易手续费，这里不能设置为0，要大于合约的gas消耗
     * @return string
     * @throws \Jason\Chain33\Exceptions\ConfigException
     */
    public function invoking(
        string $addr,
        string $abi,
        string $privateKey,
        int $amount = 0,
        string $note = '',
        int $fee = 0
    ): string {

        $this->walletUnlock();

        $txHex = $this->client->CreateTransaction([
            'execer'     => $this->addrToName($addr),
            'actionName' => 'CreateCall',
            'payload'    => [
                'isCreate' => false,
                'name'     => $this->addrToName($addr),
                'abi'      => $abi,
                'amount'   => $amount,
                'note'     => $note,
                'fee'      => $fee,
            ],
        ]);

        return $this->app->transaction->finalSend($txHex, $privateKey);
    }

    /**
     * Notes   : 账户在合约中的余额
     * @Date   : 2021/8/11 10:47 上午
     * @Author : < Jason.C >
     * @param  string        $contractAddr  合约地址
     * @param  string|array  $address       账户地址
     * @param  string|null   $assetExec     执行器名称
     * @param  string|null   $symbol        代币名称
     * @return array
     * @throws \Jason\Chain33\Exceptions\ChainException
     */
    public function balance(
        string $contractAddr,
        $address,
        ?string $assetExec = null,
        ?string $symbol = null
    ): array {
        $flat      = is_string($address);
        $addresses = $flat ? [$address] : $address;
        $contract  = $this->checkAddr($contractAddr);
        $symbol    = $symbol ?: $this->app->system->coin();
        $assetExec = $assetExec ?: 'coins';

        $result = $this->client->GetBalance([
            'execer'       => $contract['contractName'],
            'addresses'    => $addresses,
            'asset_exec'   => $assetExec,
            'asset_symbol' => $symbol,
        ]);

        return $flat ? $result[0] : $result;
    }

    /**
     * Notes   : 转账到合约
     * @Date   : 2021/4/22 10:26 上午
     * @Author : < Jason.C >
     * @param  string  $symbol      要转账的TOKEN
     * @param  int     $amount      转账金额
     * @param  string  $execName    转到的合约名称，平行链不需要前缀
     * @param  string  $privateKey  转账者私钥
     * @param  string  $note
     * @return string
     * @throws \Jason\Chain33\Exceptions\ChainException|\Jason\Chain33\Exceptions\ConfigException
     */
    public function transfer(
        string $symbol,
        int $amount,
        string $execName,
        string $privateKey,
        string $note = ''
    ): string {

        $this->walletUnlock();

        $execName = $this->parseExecer($execName);
        $toAddr   = $this->app->transaction->convertExectoAddr($execName);

        if ($symbol === $this->app->system->coin()) {
            $isToken = false;
        } else {
            $isToken = true;
        }

        $txHex = $this->client->CreateRawTransaction([
            'to'          => $toAddr,
            'amount'      => $amount,
            'fee'         => 0,
            'note'        => $note,
            'isToken'     => $isToken,
            'isWithdraw'  => false,
            'tokenSymbol' => $symbol,
            'execName'    => $execName,
        ]);

        return $this->app->transaction->finalSend($txHex, $privateKey);
    }

    /**
     * Notes   : 从合约中提款
     * @Date   : 2021/4/22 1:38 下午
     * @Author : < Jason.C >
     * @param  string  $symbol      提款的标识
     * @param  int     $amount      提款金额
     * @param  string  $execName    合约名称，平行链不需要填前缀
     * @param  string  $privateKey  提币私钥
     * @param  string  $note
     * @return string
     * @throws \Jason\Chain33\Exceptions\ChainException
     * @throws \Jason\Chain33\Exceptions\ConfigException
     */
    public function withdraw(
        string $symbol,
        int $amount,
        string $execName,
        string $privateKey,
        string $note = ''
    ): string {

        $this->walletUnlock();

        $execName = $this->parseExecer($execName);
        $toAddr   = $this->app->transaction->convertExectoAddr($execName);

        if ($symbol === $this->app->system->coin()) {
            $isToken = false;
        } else {
            $isToken = true;
        }

        $txHex = $this->client->CreateRawTransaction([
            'to'          => $toAddr,
            'amount'      => $amount,
            'fee'         => 0,
            'note'        => $note,
            'isToken'     => $isToken,
            'isWithdraw'  => true,
            'tokenSymbol' => $symbol,
            'execName'    => $execName,
        ]);

        return $this->app->transaction->finalSend($txHex, $privateKey);
    }

    /**
     * Notes   : 创建EVM合约交易
     * @Date   : 2021/1/27 1:44 下午
     * @Author : < Jason.C >
     * @param  bool    $isCreate  是否为创建合约动作，创建合约为true，调用合约为false
     * @param  string  $name      调用的合约名称，当isCreate为false时有效且必填
     * @param  string  $code      需要部署或者调用合约合约代码
     * @param  string  $abi       需要部署或调用的合约ABI代码
     * @param  string  $alias     部署新合约时的合约别名，方便识别不同合约
     * @param  string  $note      本次交易的备注信息
     * @param  int     $amount    合约调用时，如果需要传递金额，通过这个参数
     * @param  int     $fee       本次交易你的手续费，需要大约合约消耗的gas值*gasPrice
     * @param  int     $gasPrice  单位gas定价，默认为1
     * @param  int     $gasLimit  本次交易允许消耗的最大gas量，默认值和fee相等
     * @return string             交易内容十六进制字符串
     * @throws \Jason\Chain33\Exceptions\ChainException
     */
    public function createTransaction(
        bool $isCreate,
        string $name,
        string $code,
        string $abi,
        string $alias,
        string $note,
        int $amount,
        int $fee,
        int $gasPrice,
        int $gasLimit
    ): string {
        return $this->client->CreateTransaction([
            'execer'  => $this->parseExecer('evm'),
            'payload' => [
                'isCreate' => $isCreate,
                'name'     => $name,
                'code'     => $code,
                'abi'      => $abi,
                'alias'    => $alias,
                'note'     => $note,
                'amount'   => $amount,
                'fee'      => $fee,
                'gasLimit' => $gasPrice,
                'gasPrice' => $gasLimit,
            ],
        ]);
    }

    /**
     * Notes   : EVM合约只读调用（通过ABI）
     * @Date   : 2021/1/27 2:04 下午
     * @Author : < Jason.C >
     * @param  string  $address  合约地址
     * @param  string  $input    abi方法及参数
     * @param  string  $caller   本次调用的发起者，如果不填写则认为EVM合约自身发起的调用
     * @return array
     * @throws \Jason\Chain33\Exceptions\ChainException
     */
    public function readonly(string $address, string $input, string $caller = ''): array
    {
        $jsonData = $this->client->Query([
            'execer'   => $this->parseExecer('evm'),
            'funcName' => 'Query',
            'payload'  => [
                'address' => $address,
                'input'   => $input,
                'caller'  => $caller,
            ],
        ]);

        return json_decode($jsonData);
    }

    /**
     * Notes   : 估算合约调用Gas消耗
     * @Date   : 2021/1/27 1:53 下午
     * @Author : < Jason.C >
     * @param  string  $code  需要部署或调用的合约代码，如果是部署合约，本字段必填
     * @param  string  $abi   需要部署或调用的合约ABI代码
     * @param  int     $amount
     * @return int            本次交易需要消耗的gas值
     * @throws \Jason\Chain33\Exceptions\ChainException
     */
    public function estimateGas(string $code, string $abi = '', int $amount = 0): int
    {
        return $this->client->Query([
            'execer'   => $this->parseExecer('evm'),
            'funcName' => 'EstimateGas',
            'payload'  => [
                'code' => '0x' . $code,
                'abi'  => preg_replace('/\s?/', '', $abi),
            ],
        ])['gas'];
    }

    /**
     * Notes   : 查询EVM合约地址
     * EVM合约有两个标识，一个是合约地址，一个是合约名称，两者为一对一的唯一对应关系，
     * 因为系统设计原因，在涉及到转账操作时必需使用合约名称进行操作，所以本接口提供了两者的互查能力；
     * @Date   : 2021/1/27 1:57 下午
     * @Author : < Jason.C >
     * @param  string  $addr  合约地址或合约名称，填写任何一个，则返回另外一个
     * @return array
     * @throws \Jason\Chain33\Exceptions\ChainException
     */
    public function checkAddr(string $addr): array
    {
        $result = $this->client->Query([
            'execer'   => $this->parseExecer('evm'),
            'funcName' => 'CheckAddrExists',
            'payload'  => [
                'addr' => $addr,
            ],
        ]);

        if ($result['contract']) {
            return $result;
        } else {
            return [];
        }
    }

    /**
     * Notes   : 将合约名称转化为地址
     * @Date   : 2021/4/1 10:02 上午
     * @Author : < Jason.C >
     * @param  string  $name
     * @return string
     * @throws \Jason\Chain33\Exceptions\ChainException
     */
    public function nameToAddr(string $name): string
    {
        return $this->checkAddr($name)['contractAddr'];
    }

    /**
     * Notes   : 将地址转化成名称
     * @Date   : 2021/4/1 10:00 上午
     * @Author : < Jason.C >
     * @param  string  $addr
     * @return mixed|string
     * @throws \Jason\Chain33\Exceptions\ChainException
     */
    public function addrToName(string $addr): string
    {
        return $this->checkAddr($addr)['contractName'];
    }

    /**
     * Notes   : 查询合约ABI
     * @Date   : 2021/1/27 2:01 下午
     * @Author : < Jason.C >
     * @param  string  $address  EVM合约地址
     * @return array
     *                           "address":"string", 本合约地址
     *                           "abi":"string" 本合约绑定的ABI
     * @throws \Jason\Chain33\Exceptions\ChainException
     */
    public function queryABI(string $address): array
    {
        return $this->client->Query([
            'execer'   => $this->parseExecer('evm'),
            'funcName' => 'QueryABI',
            'payload'  => [
                'address' => $address,
            ],
        ]);
    }

    /**
     * Notes   : EVM调试设置
     * @Date   : 2021/1/27 2:08 下午
     * @Author : < Jason.C >
     * @param  int  $opType  操作类型，0：查询调试状态， 1：打开， -1：关闭
     * @return bool          当前调试开关状态
     * @throws \Jason\Chain33\Exceptions\ChainException
     */
    public function evmDebug(int $opType): bool
    {
        return $this->client->Query([
            'execer'   => $this->parseExecer('evm'),
            'funcName' => 'EvmDebug',
            'payload'  => [
                'optype' => $opType,
            ],
        ])['debugStatus'];
    }

}
