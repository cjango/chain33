<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: transaction.proto

namespace Jason\Chain33\Kernel\Protobuf;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\Message;
use Google\Protobuf\Internal\RepeatedField;

/**
 * Generated from protobuf message <code>Jason.Chain33.Kernel.Protobuf.CreateTransactionGroup</code>.
 */
class CreateTransactionGroup extends Message
{
    /**
     * Generated from protobuf field <code>repeated string txs = 1;</code>.
     */
    private $txs;

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                                                              Optional. Data for populating the Message object.
     *
     * @var string[]|RepeatedField $txs
     *                                                              }
     */
    public function __construct($data = null)
    {
        \GPBMetadata\Transaction::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated string txs = 1;</code>.
     *
     * @return RepeatedField
     */
    public function getTxs()
    {
        return $this->txs;
    }

    /**
     * Generated from protobuf field <code>repeated string txs = 1;</code>.
     *
     * @param  string[]|RepeatedField  $var
     *
     * @return $this
     */
    public function setTxs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, GPBType::STRING);
        $this->txs = $arr;

        return $this;
    }
}
