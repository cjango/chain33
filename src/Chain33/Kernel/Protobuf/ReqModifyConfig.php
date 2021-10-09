<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: wallet.proto

namespace Jason\Chain33\Kernel\Protobuf;

use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\Message;
use GPBMetadata\Wallet;

/**
 * Generated from protobuf message <code>Jason.Chain33.Kernel.Protobuf.ReqModifyConfig</code>.
 */
class ReqModifyConfig extends Message
{
    /**
     * Generated from protobuf field <code>string key = 1;</code>.
     */
    protected $key = '';

    /**
     * Generated from protobuf field <code>string op = 2;</code>.
     */
    protected $op = '';

    /**
     * Generated from protobuf field <code>string value = 3;</code>.
     */
    protected $value = '';

    /**
     * Generated from protobuf field <code>string modifier = 4;</code>.
     */
    protected $modifier = '';

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                       Optional. Data for populating the Message object.
     * @var string $key
     * @var string $op
     * @var string $value
     * @var string $modifier
     *                       }
     */
    public function __construct($data = null)
    {
        Wallet::initOnce();
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
     * @param  string  $var
     * @return $this
     */
    public function setKey($var)
    {
        GPBUtil::checkString($var, true);
        $this->key = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string op = 2;</code>.
     *
     * @return string
     */
    public function getOp()
    {
        return $this->op;
    }

    /**
     * Generated from protobuf field <code>string op = 2;</code>.
     *
     * @param  string  $var
     * @return $this
     */
    public function setOp($var)
    {
        GPBUtil::checkString($var, true);
        $this->op = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string value = 3;</code>.
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Generated from protobuf field <code>string value = 3;</code>.
     *
     * @param  string  $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkString($var, true);
        $this->value = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string modifier = 4;</code>.
     *
     * @return string
     */
    public function getModifier()
    {
        return $this->modifier;
    }

    /**
     * Generated from protobuf field <code>string modifier = 4;</code>.
     *
     * @param  string  $var
     * @return $this
     */
    public function setModifier($var)
    {
        GPBUtil::checkString($var, true);
        $this->modifier = $var;

        return $this;
    }
}
