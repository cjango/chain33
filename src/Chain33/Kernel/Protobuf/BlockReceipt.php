<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: blockchain.proto

namespace Jason\Chain33\Kernel\Protobuf;

use Google\Protobuf\Internal\GPBUtil;

/**
 *区块回执
 *	 receipts :区块上所有交易的收据信息列表
 * 	 hash : 本链区块hash
 *	 height :本链区块高度.
 *
 * Generated from protobuf message <code>Jason.Chain33.Kernel.Protobuf.BlockReceipt</code>
 */
class BlockReceipt extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .Jason.Chain33.Kernel.Protobuf.ReceiptData receipts = 1;</code>.
     */
    private $receipts;
    /**
     * Generated from protobuf field <code>bytes hash = 2;</code>.
     */
    protected $hash = '';
    /**
     * Generated from protobuf field <code>int64 height = 3;</code>.
     */
    protected $height = 0;

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                       Optional. Data for populating the Message object.
     *
     *     @var \Jason\Chain33\Kernel\Protobuf\ReceiptData[]|\Google\Protobuf\Internal\RepeatedField $receipts
     *     @var string $hash
     *     @var int|string $height
     * }
     */
    public function __construct($data = null)
    {
        \GPBMetadata\Blockchain::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .Jason.Chain33.Kernel.Protobuf.ReceiptData receipts = 1;</code>.
     *
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getReceipts()
    {
        return $this->receipts;
    }

    /**
     * Generated from protobuf field <code>repeated .Jason.Chain33.Kernel.Protobuf.ReceiptData receipts = 1;</code>.
     *
     * @param  \Jason\Chain33\Kernel\Protobuf\ReceiptData[]|\Google\Protobuf\Internal\RepeatedField  $var
     * @return $this
     */
    public function setReceipts($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Jason\Chain33\Kernel\Protobuf\ReceiptData::class);
        $this->receipts = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes hash = 2;</code>.
     *
     * @return string
     */
    public function getHash()
    {
        return $this->hash;
    }

    /**
     * Generated from protobuf field <code>bytes hash = 2;</code>.
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
     * Generated from protobuf field <code>int64 height = 3;</code>.
     *
     * @return int|string
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Generated from protobuf field <code>int64 height = 3;</code>.
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
