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
 *区块视图
 *     head : 区块头信息
 *     txCount :区块上交易个数
 *     txHashes : 区块上交易的哈希列表.
 * Generated from protobuf message <code>Jason.Chain33.Kernel.Protobuf.BlockOverview</code>.
 */
class BlockOverview extends Message
{
    /**
     * Generated from protobuf field <code>.Jason.Chain33.Kernel.Protobuf.Header head = 1;</code>.
     */
    protected $head = null;

    /**
     * Generated from protobuf field <code>int64 txCount = 2;</code>.
     */
    protected $txCount = 0;

    /**
     * Generated from protobuf field <code>repeated bytes txHashes = 3;</code>.
     */
    private $txHashes;

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                       Optional. Data for populating the Message object.
     *
     * @var Header $head
     * @var int|string $txCount
     * @var string[]|RepeatedField $txHashes
     *                             }
     */
    public function __construct($data = null)
    {
        Blockchain::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.Jason.Chain33.Kernel.Protobuf.Header head = 1;</code>.
     *
     * @return Header|null
     */
    public function getHead()
    {
        return isset($this->head) ? $this->head : null;
    }

    /**
     * Generated from protobuf field <code>.Jason.Chain33.Kernel.Protobuf.Header head = 1;</code>.
     *
     * @param  Header  $var
     * @return $this
     */
    public function setHead($var)
    {
        GPBUtil::checkMessage($var, Header::class);
        $this->head = $var;

        return $this;
    }

    public function hasHead()
    {
        return isset($this->head);
    }

    public function clearHead()
    {
        unset($this->head);
    }

    /**
     * Generated from protobuf field <code>int64 txCount = 2;</code>.
     *
     * @return int|string
     */
    public function getTxCount()
    {
        return $this->txCount;
    }

    /**
     * Generated from protobuf field <code>int64 txCount = 2;</code>.
     *
     * @param  int|string  $var
     * @return $this
     */
    public function setTxCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->txCount = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated bytes txHashes = 3;</code>.
     *
     * @return RepeatedField
     */
    public function getTxHashes()
    {
        return $this->txHashes;
    }

    /**
     * Generated from protobuf field <code>repeated bytes txHashes = 3;</code>.
     *
     * @param  string[]|RepeatedField  $var
     * @return $this
     */
    public function setTxHashes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, GPBType::BYTES);
        $this->txHashes = $arr;

        return $this;
    }
}
