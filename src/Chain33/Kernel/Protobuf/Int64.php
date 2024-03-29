<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: common.proto

namespace Jason\Chain33\Kernel\Protobuf;

use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\Message;
use GPBMetadata\Common;

/**
 * Generated from protobuf message <code>Jason.Chain33.Kernel.Protobuf.Int64</code>.
 */
class Int64 extends Message
{
    /**
     * Generated from protobuf field <code>int64 data = 1;</code>.
     */
    protected $data = 0;

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                       Optional. Data for populating the Message object.
     *
     * @var int|string $data
     *                 }
     */
    public function __construct($data = null)
    {
        Common::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int64 data = 1;</code>.
     *
     * @return int|string
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Generated from protobuf field <code>int64 data = 1;</code>.
     *
     * @param  int|string  $var
     * @return $this
     */
    public function setData($var)
    {
        GPBUtil::checkInt64($var);
        $this->data = $var;

        return $this;
    }
}
