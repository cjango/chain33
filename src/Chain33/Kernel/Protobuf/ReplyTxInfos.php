<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: transaction.proto

namespace Jason\Chain33\Kernel\Protobuf;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\Message;

/**
 * Generated from protobuf message <code>Jason.Chain33.Kernel.Protobuf.ReplyTxInfos</code>.
 */
class ReplyTxInfos extends Message
{
    /**
     * Generated from protobuf field <code>repeated .Jason.Chain33.Kernel.Protobuf.ReplyTxInfo txInfos = 1;</code>.
     */
    private $txInfos;

    /**
     * Constructor.
     *
     * @param  array                                                                             $data  {
     *                                                                                                  Optional. Data for populating the Message object.
     * @var \Jason\Chain33\Kernel\Protobuf\ReplyTxInfo[]|\Google\Protobuf\Internal\RepeatedField $txInfos
     *                                                                                                  }
     */
    public function __construct($data = null)
    {
        \GPBMetadata\Transaction::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .Jason.Chain33.Kernel.Protobuf.ReplyTxInfo txInfos = 1;</code>.
     *
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTxInfos()
    {
        return $this->txInfos;
    }

    /**
     * Generated from protobuf field <code>repeated .Jason.Chain33.Kernel.Protobuf.ReplyTxInfo txInfos = 1;</code>.
     *
     * @param  \Jason\Chain33\Kernel\Protobuf\ReplyTxInfo[]|\Google\Protobuf\Internal\RepeatedField  $var
     * @return $this
     */
    public function setTxInfos($var)
    {
        $arr           = GPBUtil::checkRepeatedField($var, GPBType::MESSAGE,
            ReplyTxInfo::class);
        $this->txInfos = $arr;

        return $this;
    }
}
