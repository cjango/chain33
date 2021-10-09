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
 *区块详细信息
 *     block : 区块信息
 *     receipts :区块上所有交易的收据信息列表.
 * Generated from protobuf message <code>Jason.Chain33.Kernel.Protobuf.BlockDetail</code>
 */
class BlockDetail extends Message
{
    /**
     * Generated from protobuf field <code>.Jason.Chain33.Kernel.Protobuf.Block block = 1;</code>.
     */
    protected $block = null;

    /**
     * Generated from protobuf field <code>bytes prevStatusHash = 4;</code>.
     */
    protected $prevStatusHash = '';

    /**
     * Generated from protobuf field <code>repeated .Jason.Chain33.Kernel.Protobuf.ReceiptData receipts = 2;</code>.
     */
    private $receipts;

    /**
     * Generated from protobuf field <code>repeated .Jason.Chain33.Kernel.Protobuf.KeyValue KV = 3;</code>.
     */
    private $KV;

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                                                                                                  Optional. Data for populating the Message object.
     *
     * @var Block $block
     * @var ReceiptData[]|RepeatedField $receipts
     * @var KeyValue[]|RepeatedField $KV
     * @var string $prevStatusHash
     *                                                                                                  }
     */
    public function __construct($data = null)
    {
        Blockchain::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.Jason.Chain33.Kernel.Protobuf.Block block = 1;</code>.
     *
     * @return Block|null
     */
    public function getBlock()
    {
        return isset($this->block) ? $this->block : null;
    }

    /**
     * Generated from protobuf field <code>.Jason.Chain33.Kernel.Protobuf.Block block = 1;</code>.
     *
     * @param  Block  $var
     *
     * @return $this
     */
    public function setBlock($var)
    {
        GPBUtil::checkMessage($var, Block::class);
        $this->block = $var;

        return $this;
    }

    public function hasBlock()
    {
        return isset($this->block);
    }

    public function clearBlock()
    {
        unset($this->block);
    }

    /**
     * Generated from protobuf field <code>repeated .Jason.Chain33.Kernel.Protobuf.ReceiptData receipts = 2;</code>.
     *
     * @return RepeatedField
     */
    public function getReceipts()
    {
        return $this->receipts;
    }

    /**
     * Generated from protobuf field <code>repeated .Jason.Chain33.Kernel.Protobuf.ReceiptData receipts = 2;</code>.
     *
     * @param  ReceiptData[]|RepeatedField  $var
     *
     * @return $this
     */
    public function setReceipts($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, GPBType::MESSAGE,
            ReceiptData::class);
        $this->receipts = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .Jason.Chain33.Kernel.Protobuf.KeyValue KV = 3;</code>.
     *
     * @return RepeatedField
     */
    public function getKV()
    {
        return $this->KV;
    }

    /**
     * Generated from protobuf field <code>repeated .Jason.Chain33.Kernel.Protobuf.KeyValue KV = 3;</code>.
     *
     * @param  KeyValue[]|RepeatedField  $var
     *
     * @return $this
     */
    public function setKV($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, GPBType::MESSAGE,
            KeyValue::class);
        $this->KV = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes prevStatusHash = 4;</code>.
     *
     * @return string
     */
    public function getPrevStatusHash()
    {
        return $this->prevStatusHash;
    }

    /**
     * Generated from protobuf field <code>bytes prevStatusHash = 4;</code>.
     *
     * @param  string  $var
     *
     * @return $this
     */
    public function setPrevStatusHash($var)
    {
        GPBUtil::checkString($var, false);
        $this->prevStatusHash = $var;

        return $this;
    }
}
