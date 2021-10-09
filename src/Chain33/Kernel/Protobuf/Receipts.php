<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: blockchain.proto

namespace Jason\Chain33\Kernel\Protobuf;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\Message;
use Google\Protobuf\Internal\RepeatedField;
use GPBMetadata\Blockchain;

/**
 * Generated from protobuf message <code>Jason.Chain33.Kernel.Protobuf.Receipts</code>.
 */
class Receipts extends Message
{
    /**
     * Generated from protobuf field <code>repeated .Jason.Chain33.Kernel.Protobuf.Receipt receipts = 1;</code>.
     */
    private $receipts;

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                                                                                              Optional. Data for populating the Message object.
     * @var Receipt[]|RepeatedField $receipts
     *                                                                                              }
     */
    public function __construct($data = null)
    {
        Blockchain::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .Jason.Chain33.Kernel.Protobuf.Receipt receipts = 1;</code>.
     *
     * @return RepeatedField
     */
    public function getReceipts()
    {
        return $this->receipts;
    }

    /**
     * Generated from protobuf field <code>repeated .Jason.Chain33.Kernel.Protobuf.Receipt receipts = 1;</code>.
     *
     * @param  Receipt[]|RepeatedField  $var
     * @return $this
     */
    public function setReceipts($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, GPBType::MESSAGE,
            Receipt::class);
        $this->receipts = $arr;

        return $this;
    }
}
