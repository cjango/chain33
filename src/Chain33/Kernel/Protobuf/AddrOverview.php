<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: transaction.proto

namespace Jason\Chain33\Kernel\Protobuf;

use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\Message;

/**
 * Generated from protobuf message <code>Jason.Chain33.Kernel.Protobuf.AddrOverview</code>.
 */
class AddrOverview extends Message
{
    /**
     * Generated from protobuf field <code>int64 reciver = 1;</code>.
     */
    protected $reciver = 0;

    /**
     * Generated from protobuf field <code>int64 balance = 2;</code>.
     */
    protected $balance = 0;

    /**
     * Generated from protobuf field <code>int64 txCount = 3;</code>.
     */
    protected $txCount = 0;

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                        Optional. Data for populating the Message object.
     *
     * @var int|string $reciver
     * @var int|string $balance
     * @var int|string $txCount
     *                        }
     */
    public function __construct($data = null)
    {
        \GPBMetadata\Transaction::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int64 reciver = 1;</code>.
     *
     * @return int|string
     */
    public function getReciver()
    {
        return $this->reciver;
    }

    /**
     * Generated from protobuf field <code>int64 reciver = 1;</code>.
     *
     * @param  int|string  $var
     *
     * @return $this
     */
    public function setReciver($var)
    {
        GPBUtil::checkInt64($var);
        $this->reciver = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 balance = 2;</code>.
     *
     * @return int|string
     */
    public function getBalance()
    {
        return $this->balance;
    }

    /**
     * Generated from protobuf field <code>int64 balance = 2;</code>.
     *
     * @param  int|string  $var
     *
     * @return $this
     */
    public function setBalance($var)
    {
        GPBUtil::checkInt64($var);
        $this->balance = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 txCount = 3;</code>.
     *
     * @return int|string
     */
    public function getTxCount()
    {
        return $this->txCount;
    }

    /**
     * Generated from protobuf field <code>int64 txCount = 3;</code>.
     *
     * @param  int|string  $var
     *
     * @return $this
     */
    public function setTxCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->txCount = $var;

        return $this;
    }
}
