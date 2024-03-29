<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: transaction.proto

namespace Jason\Chain33\Kernel\Protobuf;

use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\Message;

/**
 * Generated from protobuf message <code>Jason.Chain33.Kernel.Protobuf.ReqProperFee</code>.
 */
class ReqProperFee extends Message
{
    /**
     * Generated from protobuf field <code>int32 txCount = 1;</code>.
     */
    protected $txCount = 0;

    /**
     * Generated from protobuf field <code>int32 txSize = 2;</code>.
     */
    protected $txSize = 0;

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                       Optional. Data for populating the Message object.
     *
     * @var int $txCount
     * @var int $txSize
     *          }
     */
    public function __construct($data = null)
    {
        \GPBMetadata\Transaction::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 txCount = 1;</code>.
     *
     * @return int
     */
    public function getTxCount()
    {
        return $this->txCount;
    }

    /**
     * Generated from protobuf field <code>int32 txCount = 1;</code>.
     *
     * @param  int  $var
     * @return $this
     */
    public function setTxCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->txCount = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 txSize = 2;</code>.
     *
     * @return int
     */
    public function getTxSize()
    {
        return $this->txSize;
    }

    /**
     * Generated from protobuf field <code>int32 txSize = 2;</code>.
     *
     * @param  int  $var
     * @return $this
     */
    public function setTxSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->txSize = $var;

        return $this;
    }
}
