<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: executor.proto

namespace Jason\Chain33\Kernel\Protobuf;

use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\Message;
use GPBMetadata\Executor;

/**
 * Generated from protobuf message <code>Jason.Chain33.Kernel.Protobuf.Query</code>.
 */
class Query extends Message
{
    /**
     * Generated from protobuf field <code>bytes execer = 1;</code>.
     */
    protected $execer = '';

    /**
     * Generated from protobuf field <code>string funcName = 2;</code>.
     */
    protected $funcName = '';

    /**
     * Generated from protobuf field <code>bytes payload = 3;</code>.
     */
    protected $payload = '';

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                       Optional. Data for populating the Message object.
     *
     * @var string $execer
     * @var string $funcName
     * @var string $payload
     *                       }
     */
    public function __construct($data = null)
    {
        Executor::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bytes execer = 1;</code>.
     *
     * @return string
     */
    public function getExecer()
    {
        return $this->execer;
    }

    /**
     * Generated from protobuf field <code>bytes execer = 1;</code>.
     *
     * @param  string  $var
     *
     * @return $this
     */
    public function setExecer($var)
    {
        GPBUtil::checkString($var, false);
        $this->execer = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string funcName = 2;</code>.
     *
     * @return string
     */
    public function getFuncName()
    {
        return $this->funcName;
    }

    /**
     * Generated from protobuf field <code>string funcName = 2;</code>.
     *
     * @param  string  $var
     *
     * @return $this
     */
    public function setFuncName($var)
    {
        GPBUtil::checkString($var, true);
        $this->funcName = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes payload = 3;</code>.
     *
     * @return string
     */
    public function getPayload()
    {
        return $this->payload;
    }

    /**
     * Generated from protobuf field <code>bytes payload = 3;</code>.
     *
     * @param  string  $var
     *
     * @return $this
     */
    public function setPayload($var)
    {
        GPBUtil::checkString($var, false);
        $this->payload = $var;

        return $this;
    }
}
