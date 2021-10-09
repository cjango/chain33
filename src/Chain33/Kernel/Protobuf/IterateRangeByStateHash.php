<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: statistic.proto

namespace Jason\Chain33\Kernel\Protobuf;

use Google\Protobuf\Internal\GPBUtil;

/**
 *迭代查询symbol代币总额.
 *
 * Generated from protobuf message <code>Jason.Chain33.Kernel.Protobuf.IterateRangeByStateHash</code>
 */
class IterateRangeByStateHash extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bytes stateHash = 1;</code>.
     */
    protected $stateHash = '';
    /**
     * Generated from protobuf field <code>bytes start = 2;</code>.
     */
    protected $start = '';
    /**
     * Generated from protobuf field <code>bytes end = 3;</code>.
     */
    protected $end = '';
    /**
     * Generated from protobuf field <code>int64 count = 4;</code>.
     */
    protected $count = 0;

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                       Optional. Data for populating the Message object.
     *
     *     @var string $stateHash
     *     @var string $start
     *     @var string $end
     *     @var int|string $count
     * }
     */
    public function __construct($data = null)
    {
        \GPBMetadata\Statistic::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bytes stateHash = 1;</code>.
     *
     * @return string
     */
    public function getStateHash()
    {
        return $this->stateHash;
    }

    /**
     * Generated from protobuf field <code>bytes stateHash = 1;</code>.
     *
     * @param  string  $var
     * @return $this
     */
    public function setStateHash($var)
    {
        GPBUtil::checkString($var, false);
        $this->stateHash = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes start = 2;</code>.
     *
     * @return string
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Generated from protobuf field <code>bytes start = 2;</code>.
     *
     * @param  string  $var
     * @return $this
     */
    public function setStart($var)
    {
        GPBUtil::checkString($var, false);
        $this->start = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes end = 3;</code>.
     *
     * @return string
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * Generated from protobuf field <code>bytes end = 3;</code>.
     *
     * @param  string  $var
     * @return $this
     */
    public function setEnd($var)
    {
        GPBUtil::checkString($var, false);
        $this->end = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 count = 4;</code>.
     *
     * @return int|string
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Generated from protobuf field <code>int64 count = 4;</code>.
     *
     * @param  int|string  $var
     * @return $this
     */
    public function setCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->count = $var;

        return $this;
    }
}
