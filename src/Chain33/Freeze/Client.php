<?php

namespace Jason\Chain33\Freeze;

use Jason\Chain33\Kernel\BaseClient;

/**
 * Class Client
 * @package Jason\Chain33\Manage
 */
class Client extends BaseClient
{

    /**
     * Notes: 创建定期解冻合约
     * @param  string  $privateKey
     * @return string
     * @throws \Jason\Chain33\Exceptions\ConfigException
     */
    public function CreateRawUnfreezeCreate(string $privateKey): string
    {
        $this->walletUnlock();

        $txHex = $this->client->CreateRawUnfreezeCreate([
            'assetSymbol' => 'JASON',
            'assetExec'   => 'coins',
            'means'       => 'FixAmount',
            'totalCount'  => 100,
            'beneficiary' => '134W55fT3hDt5XEowQzz8gFnSkfRUtg24u',
            'startTime'   => time() + 10,
            'fixAmount'   => [
                'period' => 5,
                'amount' => 1,
            ],
        ], 'unfreeze');

        $txHex = $this->app->transaction->paraTransaction($txHex);

        $data = $this->app->transaction->sign($txHex, $privateKey);

        return $this->app->transaction->send($data);
    }

}
