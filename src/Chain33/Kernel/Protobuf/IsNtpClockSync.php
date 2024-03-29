<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: blockchain.proto

namespace Jason\Chain33\Kernel\Protobuf;

use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\Message;
use GPBMetadata\Blockchain;

/**
 *  ntp时钟状态
 * Generated from protobuf message <code>Jason.Chain33.Kernel.Protobuf.IsNtpClockSync</code>.
 */
class IsNtpClockSync extends Message
{
    /**
     * Generated from protobuf field <code>bool isntpclocksync = 1;</code>.
     */
    protected $isntpclocksync = false;

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                       Optional. Data for populating the Message object.
     *
     * @var bool $isntpclocksync
     *           }
     */
    public function __construct($data = null)
    {
        Blockchain::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bool isntpclocksync = 1;</code>.
     *
     * @return bool
     */
    public function getIsntpclocksync()
    {
        return $this->isntpclocksync;
    }

    /**
     * Generated from protobuf field <code>bool isntpclocksync = 1;</code>.
     *
     * @param  bool  $var
     * @return $this
     */
    public function setIsntpclocksync($var)
    {
        GPBUtil::checkBool($var);
        $this->isntpclocksync = $var;

        return $this;
    }
}
