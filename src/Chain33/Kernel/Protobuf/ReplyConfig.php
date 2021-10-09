<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: executor.proto

namespace Jason\Chain33\Kernel\Protobuf;

use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Jason.Chain33.Kernel.Protobuf.ReplyConfig</code>.
 */
class ReplyConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string key = 1;</code>.
     */
    protected $key = '';
    /**
     * Generated from protobuf field <code>string value = 2;</code>.
     */
    protected $value = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *                    Optional. Data for populating the Message object.
     *
     *     @var string $key
     *     @var string $value
     * }
     */
    public function __construct($data = null)
    {
        \GPBMetadata\Executor::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string key = 1;</code>.
     *
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * Generated from protobuf field <code>string key = 1;</code>.
     *
     * @param  string $var
     * @return $this
     */
    public function setKey($var)
    {
        GPBUtil::checkString($var, true);
        $this->key = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string value = 2;</code>.
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Generated from protobuf field <code>string value = 2;</code>.
     *
     * @param  string $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkString($var, true);
        $this->value = $var;

        return $this;
    }
}
