<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: blockchain.proto

namespace Jason\Chain33\Kernel\Protobuf;

use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\Message;
use GPBMetadata\Blockchain;

/**
 * Generated from protobuf message <code>Jason.Chain33.Kernel.Protobuf.ReplySubscribePush</code>.
 */
class ReplySubscribePush extends Message
{
    /**
     * Generated from protobuf field <code>bool isOk = 1;</code>.
     */
    protected $isOk = false;

    /**
     * Generated from protobuf field <code>string msg = 2;</code>.
     */
    protected $msg = '';

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                       Optional. Data for populating the Message object.
     * @var bool $isOk
     * @var string $msg
     *                       }
     */
    public function __construct($data = null)
    {
        Blockchain::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bool isOk = 1;</code>.
     *
     * @return bool
     */
    public function getIsOk()
    {
        return $this->isOk;
    }

    /**
     * Generated from protobuf field <code>bool isOk = 1;</code>.
     *
     * @param  bool  $var
     * @return $this
     */
    public function setIsOk($var)
    {
        GPBUtil::checkBool($var);
        $this->isOk = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string msg = 2;</code>.
     *
     * @return string
     */
    public function getMsg()
    {
        return $this->msg;
    }

    /**
     * Generated from protobuf field <code>string msg = 2;</code>.
     *
     * @param  string  $var
     * @return $this
     */
    public function setMsg($var)
    {
        GPBUtil::checkString($var, true);
        $this->msg = $var;

        return $this;
    }
}
