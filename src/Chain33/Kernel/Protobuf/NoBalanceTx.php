<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: transaction.proto

namespace Jason\Chain33\Kernel\Protobuf;

use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\Message;

/**
 * payAddr 可以支持 1. 地址 2. 私钥.
 * Generated from protobuf message <code>Jason.Chain33.Kernel.Protobuf.NoBalanceTx</code>
 */
class NoBalanceTx extends Message
{
    /**
     * Generated from protobuf field <code>string txHex = 1;</code>.
     */
    protected $txHex = '';

    /**
     * Generated from protobuf field <code>string payAddr = 2;</code>.
     */
    protected $payAddr = '';

    /**
     * Generated from protobuf field <code>string privkey = 3;</code>.
     */
    protected $privkey = '';

    /**
     * Generated from protobuf field <code>string expire = 4;</code>.
     */
    protected $expire = '';

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                       Optional. Data for populating the Message object.
     * @var string $txHex
     * @var string $payAddr
     * @var string $privkey
     * @var string $expire
     *                       }
     */
    public function __construct($data = null)
    {
        \GPBMetadata\Transaction::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string txHex = 1;</code>.
     *
     * @return string
     */
    public function getTxHex()
    {
        return $this->txHex;
    }

    /**
     * Generated from protobuf field <code>string txHex = 1;</code>.
     *
     * @param  string  $var
     * @return $this
     */
    public function setTxHex($var)
    {
        GPBUtil::checkString($var, true);
        $this->txHex = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string payAddr = 2;</code>.
     *
     * @return string
     */
    public function getPayAddr()
    {
        return $this->payAddr;
    }

    /**
     * Generated from protobuf field <code>string payAddr = 2;</code>.
     *
     * @param  string  $var
     * @return $this
     */
    public function setPayAddr($var)
    {
        GPBUtil::checkString($var, true);
        $this->payAddr = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string privkey = 3;</code>.
     *
     * @return string
     */
    public function getPrivkey()
    {
        return $this->privkey;
    }

    /**
     * Generated from protobuf field <code>string privkey = 3;</code>.
     *
     * @param  string  $var
     * @return $this
     */
    public function setPrivkey($var)
    {
        GPBUtil::checkString($var, true);
        $this->privkey = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string expire = 4;</code>.
     *
     * @return string
     */
    public function getExpire()
    {
        return $this->expire;
    }

    /**
     * Generated from protobuf field <code>string expire = 4;</code>.
     *
     * @param  string  $var
     * @return $this
     */
    public function setExpire($var)
    {
        GPBUtil::checkString($var, true);
        $this->expire = $var;

        return $this;
    }
}
