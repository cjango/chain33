<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: statistic.proto

namespace Jason\Chain33\Kernel\Protobuf;

use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\Message;
use GPBMetadata\Statistic;

/**
 * Generated from protobuf message <code>Jason.Chain33.Kernel.Protobuf.ExecBalanceItem</code>.
 */
class ExecBalanceItem extends Message
{
    /**
     * Generated from protobuf field <code>bytes execAddr = 1;</code>.
     */
    protected $execAddr = '';

    /**
     * Generated from protobuf field <code>int64 frozen = 2;</code>.
     */
    protected $frozen = 0;

    /**
     * Generated from protobuf field <code>int64 active = 3;</code>.
     */
    protected $active = 0;

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                        Optional. Data for populating the Message object.
     * @var string $execAddr
     * @var int|string $frozen
     * @var int|string $active
     *                        }
     */
    public function __construct($data = null)
    {
        Statistic::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bytes execAddr = 1;</code>.
     *
     * @return string
     */
    public function getExecAddr()
    {
        return $this->execAddr;
    }

    /**
     * Generated from protobuf field <code>bytes execAddr = 1;</code>.
     *
     * @param  string  $var
     * @return $this
     */
    public function setExecAddr($var)
    {
        GPBUtil::checkString($var, false);
        $this->execAddr = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 frozen = 2;</code>.
     *
     * @return int|string
     */
    public function getFrozen()
    {
        return $this->frozen;
    }

    /**
     * Generated from protobuf field <code>int64 frozen = 2;</code>.
     *
     * @param  int|string  $var
     * @return $this
     */
    public function setFrozen($var)
    {
        GPBUtil::checkInt64($var);
        $this->frozen = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 active = 3;</code>.
     *
     * @return int|string
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Generated from protobuf field <code>int64 active = 3;</code>.
     *
     * @param  int|string  $var
     * @return $this
     */
    public function setActive($var)
    {
        GPBUtil::checkInt64($var);
        $this->active = $var;

        return $this;
    }
}
