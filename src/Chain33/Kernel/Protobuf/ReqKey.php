<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: common.proto

namespace Jason\Chain33\Kernel\Protobuf;

use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\Message;
use GPBMetadata\Common;

/**
 * Generated from protobuf message <code>Jason.Chain33.Kernel.Protobuf.ReqKey</code>.
 */
class ReqKey extends Message
{
    /**
     * Generated from protobuf field <code>bytes key = 1;</code>.
     */
    protected $key = '';

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                       Optional. Data for populating the Message object.
     * @var string $key
     *                       }
     */
    public function __construct($data = null)
    {
        Common::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bytes key = 1;</code>.
     *
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * Generated from protobuf field <code>bytes key = 1;</code>.
     *
     * @param  string  $var
     * @return $this
     */
    public function setKey($var)
    {
        GPBUtil::checkString($var, false);
        $this->key = $var;

        return $this;
    }
}
