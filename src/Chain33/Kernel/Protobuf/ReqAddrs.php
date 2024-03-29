<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: transaction.proto

namespace Jason\Chain33\Kernel\Protobuf;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\Message;
use Google\Protobuf\Internal\RepeatedField;

/**
 * Generated from protobuf message <code>Jason.Chain33.Kernel.Protobuf.ReqAddrs</code>.
 */
class ReqAddrs extends Message
{
    /**
     * Generated from protobuf field <code>repeated string addrs = 1;</code>.
     */
    private $addrs;

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                       Optional. Data for populating the Message object.
     *
     * @var string[]|RepeatedField $addrs
     *                             }
     */
    public function __construct($data = null)
    {
        \GPBMetadata\Transaction::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated string addrs = 1;</code>.
     *
     * @return RepeatedField
     */
    public function getAddrs()
    {
        return $this->addrs;
    }

    /**
     * Generated from protobuf field <code>repeated string addrs = 1;</code>.
     *
     * @param  string[]|RepeatedField  $var
     * @return $this
     */
    public function setAddrs($var)
    {
        $arr         = GPBUtil::checkRepeatedField($var, GPBType::STRING);
        $this->addrs = $arr;

        return $this;
    }
}
