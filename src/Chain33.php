<?php

namespace Jason;

use Illuminate\Support\Facades\Facade;

/**
 * Class Chain33.
 *
 * @method static Chain33\Account\Client Account
 * @method static Chain33\Balance\Client Balance
 * @method static Chain33\Chain\Client Chain
 * @method static Chain33\Kernel\Client Client
 * @method static Chain33\Evm\Client Evm
 * @method static Chain33\Manage\Client Manage
 * @method static Chain33\Mempool\Client Mempool
 * @method static Chain33\Miner\Client Miner
 * @method static Chain33\Multisig\Client Multisig
 * @method static Chain33\Oracle\Client Oracle
 * @method static Chain33\ParaCross\Client ParaCross
 * @method static Chain33\Retrieve\Client Retrieve
 * @method static Chain33\Storage\Client Storage
 * @method static Chain33\System\Client System
 * @method static Chain33\Token\Client Token
 * @method static Chain33\Trade\Client Trade
 * @method static Chain33\Transaction\Client Transaction
 * @method static Chain33\Unfreeze\Client Unfreeze
 * @method static Chain33\Wallet\Client Wallet
 */
class Chain33 extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return Chain33\Application::class;
    }
}
