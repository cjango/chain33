<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: executor.proto

namespace Jason\Chain33\Kernel\Protobuf;

use Exception;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\Message;
use Google\Protobuf\Internal\RepeatedField;
use GPBMetadata\Executor;

/**
 * 配置修改部分.
 * Generated from protobuf message <code>Jason.Chain33.Kernel.Protobuf.ArrayConfig</code>.
 */
class ArrayConfig extends Message
{
    /**
     * Generated from protobuf field <code>repeated string value = 3;</code>.
     */
    private RepeatedField $value;

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                       Optional. Data for populating the Message object.
     *
     * @var string[]|RepeatedField $value
     *                             }
     */
    public function __construct($data = null)
    {
        Executor::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated string value = 3;</code>.
     *
     * @return RepeatedField
     */
    public function getValue(): RepeatedField
    {
        return $this->value;
    }

    /**
     * Generated from protobuf field <code>repeated string value = 3;</code>.
     *
     * @param  string[]|RepeatedField  $var
     * @return $this
     * @throws Exception
     */
    public function setValue($var): ArrayConfig
    {
        $arr         = GPBUtil::checkRepeatedField($var, GPBType::STRING);
        $this->value = $arr;

        return $this;
    }
}
