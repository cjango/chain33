<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: executor.proto

namespace Jason\Chain33\Kernel\Protobuf;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Jason.Chain33.Kernel.Protobuf.Query</code>
 */
class Query extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bytes execer = 1;</code>
     */
    protected $execer = '';
    /**
     * Generated from protobuf field <code>string funcName = 2;</code>
     */
    protected $funcName = '';
    /**
     * Generated from protobuf field <code>bytes payload = 3;</code>
     */
    protected $payload = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $execer
     *     @type string $funcName
     *     @type string $payload
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Executor::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bytes execer = 1;</code>
     * @return string
     */
    public function getExecer()
    {
        return $this->execer;
    }

    /**
     * Generated from protobuf field <code>bytes execer = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setExecer($var)
    {
        GPBUtil::checkString($var, False);
        $this->execer = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string funcName = 2;</code>
     * @return string
     */
    public function getFuncName()
    {
        return $this->funcName;
    }

    /**
     * Generated from protobuf field <code>string funcName = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setFuncName($var)
    {
        GPBUtil::checkString($var, True);
        $this->funcName = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes payload = 3;</code>
     * @return string
     */
    public function getPayload()
    {
        return $this->payload;
    }

    /**
     * Generated from protobuf field <code>bytes payload = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setPayload($var)
    {
        GPBUtil::checkString($var, False);
        $this->payload = $var;

        return $this;
    }

}

