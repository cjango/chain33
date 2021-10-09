<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: blockchain.proto

namespace Jason\Chain33\Kernel\Protobuf;

use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\Message;
use GPBMetadata\Blockchain;

/**
 * Generated from protobuf message <code>Jason.Chain33.Kernel.Protobuf.BlockSeq</code>.
 */
class BlockSeq extends Message
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
     * Generated from protobuf field <code>.Jason.Chain33.Kernel.Protobuf.BlockDetail detail = 3;</code>.
     */
    protected $detail = null;

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                                                          Optional. Data for populating the Message object.
     *
     * @var int|string $num
     * @var BlockSequence $seq
     * @var BlockDetail $detail
     *                                                          }
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
     *
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
     *
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
     * Generated from protobuf field <code>.Jason.Chain33.Kernel.Protobuf.BlockDetail detail = 3;</code>.
     *
     * @return BlockDetail|null
     */
    public function getDetail()
    {
        return isset($this->detail) ? $this->detail : null;
    }

    /**
     * Generated from protobuf field <code>.Jason.Chain33.Kernel.Protobuf.BlockDetail detail = 3;</code>.
     *
     * @param  BlockDetail  $var
     *
     * @return $this
     */
    public function setDetail($var)
    {
        GPBUtil::checkMessage($var, BlockDetail::class);
        $this->detail = $var;

        return $this;
    }

    public function hasDetail()
    {
        return isset($this->detail);
    }

    public function clearDetail()
    {
        unset($this->detail);
    }
}
