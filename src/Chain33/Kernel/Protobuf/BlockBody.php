<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: blockchain.proto

namespace Jason\Chain33\Kernel\Protobuf;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\Message;
use GPBMetadata\Blockchain;

/**
 *区块体信息
 *     txs : 区块上所有交易列表
 *     receipts :区块上所有交易的收据信息列表
 *     mainHash : 主链区块hash，平行链使用
 *     mainHeight :主链区块高度，平行链使用
 *     hash : 本链区块hash
 *     height :本链区块高度.
 * Generated from protobuf message <code>Jason.Chain33.Kernel.Protobuf.BlockBody</code>
 */
class BlockBody extends Message
{
    /**
     * Generated from protobuf field <code>bytes mainHash = 3;</code>.
     */
    protected $mainHash = '';

    /**
     * Generated from protobuf field <code>int64 mainHeight = 4;</code>.
     */
    protected $mainHeight = 0;

    /**
     * Generated from protobuf field <code>bytes hash = 5;</code>.
     */
    protected $hash = '';

    /**
     * Generated from protobuf field <code>int64 height = 6;</code>.
     */
    protected $height = 0;

    /**
     * Generated from protobuf field <code>repeated .Jason.Chain33.Kernel.Protobuf.Transaction txs = 1;</code>.
     */
    private $txs;

    /**
     * Generated from protobuf field <code>repeated .Jason.Chain33.Kernel.Protobuf.ReceiptData receipts = 2;</code>.
     */
    private $receipts;

    /**
     * Constructor.
     *
     * @param  array                                                                             $data  {
     *                                                                                                  Optional. Data for populating the Message object.
     * @var \Jason\Chain33\Kernel\Protobuf\Transaction[]|\Google\Protobuf\Internal\RepeatedField $txs
     * @var \Jason\Chain33\Kernel\Protobuf\ReceiptData[]|\Google\Protobuf\Internal\RepeatedField $receipts
     * @var string                                                                               $mainHash
     * @var int|string                                                                           $mainHeight
     * @var string                                                                               $hash
     * @var int|string                                                                           $height
     *                                                                                                  }
     */
    public function __construct($data = null)
    {
        Blockchain::initOnce();
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
        $arr       = GPBUtil::checkRepeatedField($var, GPBType::MESSAGE,
            Transaction::class);
        $this->txs = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .Jason.Chain33.Kernel.Protobuf.ReceiptData receipts = 2;</code>.
     *
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getReceipts()
    {
        return $this->receipts;
    }

    /**
     * Generated from protobuf field <code>repeated .Jason.Chain33.Kernel.Protobuf.ReceiptData receipts = 2;</code>.
     *
     * @param  \Jason\Chain33\Kernel\Protobuf\ReceiptData[]|\Google\Protobuf\Internal\RepeatedField  $var
     * @return $this
     */
    public function setReceipts($var)
    {
        $arr            = GPBUtil::checkRepeatedField($var, GPBType::MESSAGE,
            ReceiptData::class);
        $this->receipts = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes mainHash = 3;</code>.
     *
     * @return string
     */
    public function getMainHash()
    {
        return $this->mainHash;
    }

    /**
     * Generated from protobuf field <code>bytes mainHash = 3;</code>.
     *
     * @param  string  $var
     * @return $this
     */
    public function setMainHash($var)
    {
        GPBUtil::checkString($var, false);
        $this->mainHash = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 mainHeight = 4;</code>.
     *
     * @return int|string
     */
    public function getMainHeight()
    {
        return $this->mainHeight;
    }

    /**
     * Generated from protobuf field <code>int64 mainHeight = 4;</code>.
     *
     * @param  int|string  $var
     * @return $this
     */
    public function setMainHeight($var)
    {
        GPBUtil::checkInt64($var);
        $this->mainHeight = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes hash = 5;</code>.
     *
     * @return string
     */
    public function getHash()
    {
        return $this->hash;
    }

    /**
     * Generated from protobuf field <code>bytes hash = 5;</code>.
     *
     * @param  string  $var
     * @return $this
     */
    public function setHash($var)
    {
        GPBUtil::checkString($var, false);
        $this->hash = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 height = 6;</code>.
     *
     * @return int|string
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Generated from protobuf field <code>int64 height = 6;</code>.
     *
     * @param  int|string  $var
     * @return $this
     */
    public function setHeight($var)
    {
        GPBUtil::checkInt64($var);
        $this->height = $var;

        return $this;
    }
}
