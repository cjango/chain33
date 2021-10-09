<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: blockchain.proto

namespace Jason\Chain33\Kernel\Protobuf;

use Google\Protobuf\Internal\GPBUtil;

/**
 *获取ChunkRecord信息
 * 	 start : 获取Chunk的开始高度
 *	 end :获取Chunk的结束高度
 * 	 Isdetail : 是否需要获取所有Chunk Record 信息，false时候获取到chunkNum--->chunkhash的KV对，true获取全部
 * 	 pid : peer列表.
 *
 * Generated from protobuf message <code>Jason.Chain33.Kernel.Protobuf.ReqChunkRecords</code>
 */
class ReqChunkRecords extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int64 start = 1;</code>.
     */
    protected $start = 0;
    /**
     * Generated from protobuf field <code>int64 end = 2;</code>.
     */
    protected $end = 0;
    /**
     * Generated from protobuf field <code>bool isDetail = 3;</code>.
     */
    protected $isDetail = false;
    /**
     * Generated from protobuf field <code>repeated string pid = 4;</code>.
     */
    private $pid;

    /**
     * Constructor.
     *
     * @param array $data {
     *                    Optional. Data for populating the Message object.
     *
     *     @var int|string $start
     *     @var int|string $end
     *     @var bool $isDetail
     *     @var string[]|\Google\Protobuf\Internal\RepeatedField $pid
     * }
     */
    public function __construct($data = null)
    {
        \GPBMetadata\Blockchain::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int64 start = 1;</code>.
     *
     * @return int|string
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Generated from protobuf field <code>int64 start = 1;</code>.
     *
     * @param  int|string $var
     * @return $this
     */
    public function setStart($var)
    {
        GPBUtil::checkInt64($var);
        $this->start = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 end = 2;</code>.
     *
     * @return int|string
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * Generated from protobuf field <code>int64 end = 2;</code>.
     *
     * @param  int|string $var
     * @return $this
     */
    public function setEnd($var)
    {
        GPBUtil::checkInt64($var);
        $this->end = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool isDetail = 3;</code>.
     *
     * @return bool
     */
    public function getIsDetail()
    {
        return $this->isDetail;
    }

    /**
     * Generated from protobuf field <code>bool isDetail = 3;</code>.
     *
     * @param  bool  $var
     * @return $this
     */
    public function setIsDetail($var)
    {
        GPBUtil::checkBool($var);
        $this->isDetail = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string pid = 4;</code>.
     *
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPid()
    {
        return $this->pid;
    }

    /**
     * Generated from protobuf field <code>repeated string pid = 4;</code>.
     *
     * @param  string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPid($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->pid = $arr;

        return $this;
    }
}
