<?php

namespace Jason\Chain33\Evm;

use Exception;
use Jason\Chain33\Exceptions\ChainException;
use Jason\Chain33\Kernel\BaseClient;
use Jason\Chain33\Kernel\Utils\Base58;

/**
 * Class Client.
 */
class Client extends BaseClient
{
    /**
     * Notes   : 估算合约调用Gas消耗.
     *
     * @Date   : 2021/10/8 4:39 下午
     * @Author : <Jason.C>
     *
     * @param  string  $tx  部署合约交易或者调用合约交易的序列化后的字符串
     * @param  string  $from  合约交易调用者地址
     * @return int
     *
     * @throws ChainException
     */
    public function estimateGas(string $tx, string $from): int
    {
        return $this->client->Query([
            'execer'   => $this->parseExecer('evm'),
            'funcName' => 'EstimateGas',
            'payload'  => [
                'tx'   => $tx,
                'from' => $from,
            ],
        ])['gas'];
    }

    /**
     * Notes   : 部署合约.
     *
     * @Date   : 2021/10/8 4:49 下午
     * @Author : <Jason.C>
     *
     * @param  string  $parameter  部署合约的参数 “constructor(zbc, zbc, 3300, ‘${evmcreatorAddr}’)” 原型为 constructor (string
     *                             memory name, string memory symbol_,uint256 supply, address
     *                             owner),这里表示部署一个名称和symbol都为 zbc，总金额3300*le8，拥有者为 evm_creatorAddr 的ERC20合约
     * @param  string  $code  需要部署合约的 bin 内容
     * @param  string  $abi  部署合约的 abi 内容
     * @param  int  $fee  精确的手续费可以通过EstimateGas这个jrpc接口进行估算，同时该交易费需要满足根据部署交易体积大小计算出来的交易费要求
     * @param  string  $alias  合约别名
     * @param  string  $privateKey  部署者的私钥
     * @param  string  $note  合约备注
     * @return string
     *
     * @throws ChainException
     */
    public function deploy(
        string $parameter,
        string $code,
        string $abi,
        int $fee,
        string $alias,
        string $privateKey,
        string $note = ''
    ): string {
        $txHex = $this->client->CreateDeployTx([
            'code'      => $code,
            'abi'       => $abi,
            'fee'       => $fee,
            'note'      => $note,
            'alias'     => $alias,
            'parameter' => $parameter,
            'paraName'  => $this->parseExecer(''),
        ], 'evm');

        return $this->app->transaction->finalSend($txHex, $privateKey);
    }

    /**
     * Notes   : 调用合约.
     *
     * @Date   : 2021/10/8 5:19 下午
     * @Author : <Jason.C>
     *
     * @param  string  $parameter  操作合约的参数，例如转账交易 “transfer(‘${evm_transferAddr}’, 20)”
     * @param  string  $abi  部署合约的 abi 内容
     * @param  string  $contractAddr  合约地址
     * @param  int  $fee  精确的手续费可以通过EstimateGas这个jrpc接口进行估算，同时该交易费需要满足根据部署交易体积大小计算出来的交易费要求，一般调用交易的交易费直接设置为通过交易体积大小计算出来的交易费即可
     * @param  string  $privateKey  调用者私钥
     * @param  string  $note  合约备注
     * @return string
     *
     * @throws ChainException
     */
    public function invoking(
        string $parameter,
        string $abi,
        int $fee,
        string $contractAddr,
        string $privateKey,
        string $note = ''
    ): string {
        $txHex = $this->client->CreateCallTx([
            'abi'          => $abi,
            'fee'          => $fee,
            'note'         => $note,
            'parameter'    => $parameter,
            'contractAddr' => $contractAddr,
            'paraName'     => $this->parseExecer(''),
        ], 'evm');

        return $this->app->transaction->finalSend($txHex, $privateKey);
    }

    /**
     * Notes   : 获取合约地址
     *
     * @Date   : 2021/10/8 5:21 下午
     * @Author : <Jason.C>
     *
     * @param  string  $caller  部署合约的地址
     * @param  string  $txhash  创建合约的交易哈希，去掉前面的 0x
     */
    public function getAddr(string $caller, string $txhash): string
    {
        return $this->client->CalcNewContractAddr([
            'caller' => $caller,
            'txhash' => $txhash,
        ], 'evm');
    }

    /**
     * Notes   : 查询合约地址是否存在.
     *
     * @Date   : 2021/10/8 5:24 下午
     * @Author : <Jason.C>
     *
     * @param  string  $addr  被查询的合约地址
     * @return array
     *
     * @throws ChainException
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
     * Notes   : evm的地址转换为chain33地址
     *
     * @Date   : 2021/10/8 4:21 下午
     * @Author : <Jason.C>
     *
     * @param  string  $evmAddr
     * @return string
     *
     * @throws Exception
     */
    public function convertToChain(string $evmAddr): string
    {
        $transAddr = '';
        if (substr($evmAddr, 0, 2) === '0x') {
            $transAddr = substr($evmAddr, 24);
        } else {
            foreach (explode(',', $evmAddr) as $s) {
                $transAddr .= chr($s);
            }
            $transAddr = '00'.bin2hex($transAddr);
        }

        $checksum = hash('sha256', hex2bin(hash('sha256', hex2bin($transAddr))));

        return Base58::encode($transAddr.substr($checksum, 0, 8));
    }

    /**
     * Notes   : chain33的地址转换为evm地址
     *
     * @Date   : 2021/10/8 4:21 下午
     * @Author : <Jason.C>
     *
     * @param  string  $chainAddr
     * @return string
     */
    public function convertToEvm(string $chainAddr): string
    {
        return substr((Base58::decode($chainAddr)), 0, 42);
    }
}
