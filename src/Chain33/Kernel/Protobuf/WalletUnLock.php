<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: wallet.proto

namespace Jason\Chain33\Kernel\Protobuf;

use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\Message;
use GPBMetadata\Wallet;

/**
 *钱包解锁
 *   passwd : 钱包密码
 *   timeout :钱包解锁时间，0，一直解锁，非0值，超时之后继续锁定
 *   walletOrTicket :解锁整个钱包还是只解锁挖矿买票功能，1只解锁挖矿买票，0解锁整个钱包.
 * Generated from protobuf message <code>Jason.Chain33.Kernel.Protobuf.WalletUnLock</code>.
 */
class WalletUnLock extends Message
{
    /**
     * Generated from protobuf field <code>string passwd = 1;</code>.
     */
    protected $passwd = '';

    /**
     * Generated from protobuf field <code>int64 timeout = 2;</code>.
     */
    protected $timeout = 0;

    /**
     * Generated from protobuf field <code>bool walletOrTicket = 3;</code>.
     */
    protected $walletOrTicket = false;

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                       Optional. Data for populating the Message object.
     *
     * @var string $passwd
     * @var int|string $timeout
     * @var bool $walletOrTicket
     *           }
     */
    public function __construct($data = null)
    {
        Wallet::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string passwd = 1;</code>.
     *
     * @return string
     */
    public function getPasswd()
    {
        return $this->passwd;
    }

    /**
     * Generated from protobuf field <code>string passwd = 1;</code>.
     *
     * @param  string  $var
     * @return $this
     */
    public function setPasswd($var)
    {
        GPBUtil::checkString($var, true);
        $this->passwd = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 timeout = 2;</code>.
     *
     * @return int|string
     */
    public function getTimeout()
    {
        return $this->timeout;
    }

    /**
     * Generated from protobuf field <code>int64 timeout = 2;</code>.
     *
     * @param  int|string  $var
     * @return $this
     */
    public function setTimeout($var)
    {
        GPBUtil::checkInt64($var);
        $this->timeout = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool walletOrTicket = 3;</code>.
     *
     * @return bool
     */
    public function getWalletOrTicket()
    {
        return $this->walletOrTicket;
    }

    /**
     * Generated from protobuf field <code>bool walletOrTicket = 3;</code>.
     *
     * @param  bool  $var
     * @return $this
     */
    public function setWalletOrTicket($var)
    {
        GPBUtil::checkBool($var);
        $this->walletOrTicket = $var;

        return $this;
    }
}
