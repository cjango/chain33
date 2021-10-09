<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: blockchain.proto

namespace Jason\Chain33\Kernel\Protobuf;

use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\Message;
use GPBMetadata\Blockchain;

/**
 * ChunkInfo用于记录chunk的信息.
 * Generated from protobuf message <code>Jason.Chain33.Kernel.Protobuf.ChunkInfo</code>
 */
class ChunkInfo extends Message
{
    /**
     * Generated from protobuf field <code>int64 chunkNum = 1;</code>.
     */
    protected $chunkNum = 0;

    /**
     * Generated from protobuf field <code>bytes chunkHash = 2;</code>.
     */
    protected $chunkHash = '';

    /**
     * Generated from protobuf field <code>int64 start = 3;</code>.
     */
    protected $start = 0;

    /**
     * Generated from protobuf field <code>int64 end = 4;</code>.
     */
    protected $end = 0;

    /**
     * Constructor.
     *
     * @param  array   $data  {
     *                        Optional. Data for populating the Message object.
     * @var int|string $chunkNum
     * @var string     $chunkHash
     * @var int|string $start
     * @var int|string $end
     *                        }
     */
    public function __construct($data = null)
    {
        Blockchain::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int64 chunkNum = 1;</code>.
     *
     * @return int|string
     */
    public function getChunkNum()
    {
        return $this->chunkNum;
    }

    /**
     * Generated from protobuf field <code>int64 chunkNum = 1;</code>.
     *
     * @param  int|string  $var
     * @return $this
     */
    public function setChunkNum($var)
    {
        GPBUtil::checkInt64($var);
        $this->chunkNum = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes chunkHash = 2;</code>.
     *
     * @return string
     */
    public function getChunkHash()
    {
        return $this->chunkHash;
    }

    /**
     * Generated from protobuf field <code>bytes chunkHash = 2;</code>.
     *
     * @param  string  $var
     * @return $this
     */
    public function setChunkHash($var)
    {
        GPBUtil::checkString($var, false);
        $this->chunkHash = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 start = 3;</code>.
     *
     * @return int|string
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Generated from protobuf field <code>int64 start = 3;</code>.
     *
     * @param  int|string  $var
     * @return $this
     */
    public function setStart($var)
    {
        GPBUtil::checkInt64($var);
        $this->start = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 end = 4;</code>.
     *
     * @return int|string
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * Generated from protobuf field <code>int64 end = 4;</code>.
     *
     * @param  int|string  $var
     * @return $this
     */
    public function setEnd($var)
    {
        GPBUtil::checkInt64($var);
        $this->end = $var;

        return $this;
    }
}
