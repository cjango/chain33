<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: transaction.proto

namespace Jason\Chain33\Kernel\Protobuf;

use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\Message;

/**
 * Generated from protobuf message <code>Jason.Chain33.Kernel.Protobuf.ReplyProperFee</code>.
 */
class ReplyProperFee extends Message
{
    /**
     * Generated from protobuf field <code>int64 properFee = 1;</code>.
     */
    protected $properFee = 0;

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                       Optional. Data for populating the Message object.
     *
     * @var int|string $properFee
     *                 }
     */
    public function __construct($data = null)
    {
        \GPBMetadata\Transaction::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int64 properFee = 1;</code>.
     *
     * @return int|string
     */
    public function getProperFee()
    {
        return $this->properFee;
    }

    /**
     * Generated from protobuf field <code>int64 properFee = 1;</code>.
     *
     * @param  int|string  $var
     * @return $this
     */
    public function setProperFee($var)
    {
        GPBUtil::checkInt64($var);
        $this->properFee = $var;

        return $this;
    }
}
