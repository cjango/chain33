<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: transaction.proto

namespace Jason\Chain33\Kernel\Protobuf;

use Exception;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\Message;

/**
 * assert transfer struct.
 * Generated from protobuf message <code>Jason.Chain33.Kernel.Protobuf.AssetsGenesis</code>.
 */
class AssetsGenesis extends Message
{
    /**
     * Generated from protobuf field <code>int64 amount = 2;</code>.
     */
    protected int $amount = 0;

    /**
     * Generated from protobuf field <code>string returnAddress = 3;</code>.
     */
    protected string $returnAddress = '';

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                       Optional. Data for populating the Message object.
     *
     * @var int|string $amount
     * @var string $returnAddress
     *             }
     */
    public function __construct($data = null)
    {
        \GPBMetadata\Transaction::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int64 amount = 2;</code>.
     *
     * @return int
     */
    public function getAmount(): int
    {
        return $this->amount;
    }

    /**
     * Generated from protobuf field <code>int64 amount = 2;</code>.
     *
     * @param  int|string  $var
     * @return $this
     * @throws Exception
     */
    public function setAmount($var): AssetsGenesis
    {
        GPBUtil::checkInt64($var);
        $this->amount = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string returnAddress = 3;</code>.
     *
     * @return string
     */
    public function getReturnAddress(): string
    {
        return $this->returnAddress;
    }

    /**
     * Generated from protobuf field <code>string returnAddress = 3;</code>.
     *
     * @param  string  $var
     * @return $this
     * @throws Exception
     */
    public function setReturnAddress(string $var): AssetsGenesis
    {
        GPBUtil::checkString($var, true);
        $this->returnAddress = $var;

        return $this;
    }
}
