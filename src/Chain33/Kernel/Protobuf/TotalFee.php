<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: statistic.proto

namespace Jason\Chain33\Kernel\Protobuf;

use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\Message;
use GPBMetadata\Statistic;

/**
 *手续费.
 * Generated from protobuf message <code>Jason.Chain33.Kernel.Protobuf.TotalFee</code>
 */
class TotalFee extends Message
{
    /**
     * Generated from protobuf field <code>int64 fee = 1;</code>.
     */
    protected $fee = 0;

    /**
     * Generated from protobuf field <code>int64 txCount = 2;</code>.
     */
    protected $txCount = 0;

    /**
     * Constructor.
     *
     * @param  array   $data  {
     *                        Optional. Data for populating the Message object.
     * @var int|string $fee
     * @var int|string $txCount
     *                        }
     */
    public function __construct($data = null)
    {
        Statistic::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int64 fee = 1;</code>.
     *
     * @return int|string
     */
    public function getFee()
    {
        return $this->fee;
    }

    /**
     * Generated from protobuf field <code>int64 fee = 1;</code>.
     *
     * @param  int|string  $var
     * @return $this
     */
    public function setFee($var)
    {
        GPBUtil::checkInt64($var);
        $this->fee = $var;

        return $this;
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
}
