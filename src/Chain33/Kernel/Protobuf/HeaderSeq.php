<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: blockchain.proto

namespace Jason\Chain33\Kernel\Protobuf;

use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\Message;
use GPBMetadata\Blockchain;

/**
 *通过seq获取区块的header信息.
 * Generated from protobuf message <code>Jason.Chain33.Kernel.Protobuf.HeaderSeq</code>.
 */
class HeaderSeq extends Message
{
    /**
     * Generated from protobuf field <code>int64 num = 1;</code>.
     */
    protected $num = 0;

    /**
     * Generated from protobuf field <code>.Jason.Chain33.Kernel.Protobuf.BlockSequence seq = 2;</code>.
     */
    protected $seq = null;

    /**
     * Generated from protobuf field <code>.Jason.Chain33.Kernel.Protobuf.Header header = 3;</code>.
     */
    protected $header = null;

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                       Optional. Data for populating the Message object.
     *
     * @var int|string $num
     * @var BlockSequence $seq
     * @var Header $header
     *             }
     */
    public function __construct($data = null)
    {
        Blockchain::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int64 num = 1;</code>.
     *
     * @return int|string
     */
    public function getNum()
    {
        return $this->num;
    }

    /**
     * Generated from protobuf field <code>int64 num = 1;</code>.
     *
     * @param  int|string  $var
     * @return $this
     */
    public function setNum($var)
    {
        GPBUtil::checkInt64($var);
        $this->num = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Jason.Chain33.Kernel.Protobuf.BlockSequence seq = 2;</code>.
     *
     * @return BlockSequence|null
     */
    public function getSeq()
    {
        return isset($this->seq) ? $this->seq : null;
    }

    /**
     * Generated from protobuf field <code>.Jason.Chain33.Kernel.Protobuf.BlockSequence seq = 2;</code>.
     *
     * @param  BlockSequence  $var
     * @return $this
     */
    public function setSeq($var)
    {
        GPBUtil::checkMessage($var, BlockSequence::class);
        $this->seq = $var;

        return $this;
    }

    public function hasSeq()
    {
        return isset($this->seq);
    }

    public function clearSeq()
    {
        unset($this->seq);
    }

    /**
     * Generated from protobuf field <code>.Jason.Chain33.Kernel.Protobuf.Header header = 3;</code>.
     *
     * @return Header|null
     */
    public function getHeader()
    {
        return isset($this->header) ? $this->header : null;
    }

    /**
     * Generated from protobuf field <code>.Jason.Chain33.Kernel.Protobuf.Header header = 3;</code>.
     *
     * @param  Header  $var
     * @return $this
     */
    public function setHeader($var)
    {
        GPBUtil::checkMessage($var, Header::class);
        $this->header = $var;

        return $this;
    }

    public function hasHeader()
    {
        return isset($this->header);
    }

    public function clearHeader()
    {
        unset($this->header);
    }
}
