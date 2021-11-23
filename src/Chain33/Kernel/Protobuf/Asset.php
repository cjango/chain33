<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: transaction.proto

namespace Jason\Chain33\Kernel\Protobuf;

use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\Message;

/**
 * Generated from protobuf message <code>Jason.Chain33.Kernel.Protobuf.Asset</code>.
 */
class Asset extends Message
{
    /**
     * Generated from protobuf field <code>string exec = 1;</code>.
     */
    protected $exec = '';

    /**
     * Generated from protobuf field <code>string symbol = 2;</code>.
     */
    protected $symbol = '';

    /**
     * Generated from protobuf field <code>int64 amount = 3;</code>.
     */
    protected $amount = 0;

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                       Optional. Data for populating the Message object.
     *
     * @var string $exec
     * @var string $symbol
     * @var int|string $amount
     *                 }
     */
    public function __construct($data = null)
    {
        \GPBMetadata\Transaction::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string exec = 1;</code>.
     *
     * @return string
     */
    public function getExec()
    {
        return $this->exec;
    }

    /**
     * Generated from protobuf field <code>string exec = 1;</code>.
     *
     * @param  string  $var
     * @return $this
     */
    public function setExec($var)
    {
        GPBUtil::checkString($var, true);
        $this->exec = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string symbol = 2;</code>.
     *
     * @return string
     */
    public function getSymbol()
    {
        return $this->symbol;
    }

    /**
     * Generated from protobuf field <code>string symbol = 2;</code>.
     *
     * @param  string  $var
     * @return $this
     */
    public function setSymbol($var)
    {
        GPBUtil::checkString($var, true);
        $this->symbol = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 amount = 3;</code>.
     *
     * @return int|string
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Generated from protobuf field <code>int64 amount = 3;</code>.
     *
     * @param  int|string  $var
     * @return $this
     */
    public function setAmount($var)
    {
        GPBUtil::checkInt64($var);
        $this->amount = $var;

        return $this;
    }
}
