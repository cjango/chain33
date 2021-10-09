<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: transaction.proto

namespace Jason\Chain33\Kernel\Protobuf;

use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Jason.Chain33.Kernel.Protobuf.Transactions</code>.
 */
class Transactions extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .Jason.Chain33.Kernel.Protobuf.Transaction txs = 1;</code>.
     */
    private $txs;

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                       Optional. Data for populating the Message object.
     *
     *     @var \Jason\Chain33\Kernel\Protobuf\Transaction[]|\Google\Protobuf\Internal\RepeatedField $txs
     * }
     */
    public function __construct($data = null)
    {
        \GPBMetadata\Transaction::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .Jason.Chain33.Kernel.Protobuf.Transaction txs = 1;</code>.
     *
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTxs()
    {
        return $this->txs;
    }

    /**
     * Generated from protobuf field <code>repeated .Jason.Chain33.Kernel.Protobuf.Transaction txs = 1;</code>.
     *
     * @param  \Jason\Chain33\Kernel\Protobuf\Transaction[]|\Google\Protobuf\Internal\RepeatedField  $var
     * @return $this
     */
    public function setTxs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Jason\Chain33\Kernel\Protobuf\Transaction::class);
        $this->txs = $arr;

        return $this;
    }
}
