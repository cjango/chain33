<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: blockchain.proto

namespace Jason\Chain33\Kernel\Protobuf;

use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\Message;
use GPBMetadata\Blockchain;

/**
 *区块链状态
 *     currentHeight : 区块最新高度
 *     mempoolSize :内存池大小
 *     msgQueueSize : 消息队列大小.
 * Generated from protobuf message <code>Jason.Chain33.Kernel.Protobuf.ChainStatus</code>.
 */
class ChainStatus extends Message
{
    /**
     * Generated from protobuf field <code>int64 currentHeight = 1;</code>.
     */
    protected $currentHeight = 0;

    /**
     * Generated from protobuf field <code>int64 mempoolSize = 2;</code>.
     */
    protected $mempoolSize = 0;

    /**
     * Generated from protobuf field <code>int64 msgQueueSize = 3;</code>.
     */
    protected $msgQueueSize = 0;

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                       Optional. Data for populating the Message object.
     *
     * @var int|string $currentHeight
     * @var int|string $mempoolSize
     * @var int|string $msgQueueSize
     *                 }
     */
    public function __construct($data = null)
    {
        Blockchain::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int64 currentHeight = 1;</code>.
     *
     * @return int|string
     */
    public function getCurrentHeight()
    {
        return $this->currentHeight;
    }

    /**
     * Generated from protobuf field <code>int64 currentHeight = 1;</code>.
     *
     * @param  int|string  $var
     * @return $this
     */
    public function setCurrentHeight($var)
    {
        GPBUtil::checkInt64($var);
        $this->currentHeight = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 mempoolSize = 2;</code>.
     *
     * @return int|string
     */
    public function getMempoolSize()
    {
        return $this->mempoolSize;
    }

    /**
     * Generated from protobuf field <code>int64 mempoolSize = 2;</code>.
     *
     * @param  int|string  $var
     * @return $this
     */
    public function setMempoolSize($var)
    {
        GPBUtil::checkInt64($var);
        $this->mempoolSize = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 msgQueueSize = 3;</code>.
     *
     * @return int|string
     */
    public function getMsgQueueSize()
    {
        return $this->msgQueueSize;
    }

    /**
     * Generated from protobuf field <code>int64 msgQueueSize = 3;</code>.
     *
     * @param  int|string  $var
     * @return $this
     */
    public function setMsgQueueSize($var)
    {
        GPBUtil::checkInt64($var);
        $this->msgQueueSize = $var;

        return $this;
    }
}
