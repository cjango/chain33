<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: account.proto

namespace Jason\Chain33\Kernel\Protobuf;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\Message;
use Google\Protobuf\Internal\RepeatedField;

/**
 * Generated from protobuf message <code>Jason.Chain33.Kernel.Protobuf.AllExecBalance</code>.
 */
class AllExecBalance extends Message
{
    /**
     * Generated from protobuf field <code>string addr = 1;</code>.
     */
    protected $addr = '';

    /**
     * Generated from protobuf field <code>repeated .Jason.Chain33.Kernel.Protobuf.ExecAccount ExecAccount = 2;</code>.
     */
    private $ExecAccount;

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                       Optional. Data for populating the Message object.
     *
     * @var string $addr
     * @var ExecAccount[]|RepeatedField $ExecAccount
     *                                  }
     */
    public function __construct($data = null)
    {
        \GPBMetadata\Account::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string addr = 1;</code>.
     *
     * @return string
     */
    public function getAddr()
    {
        return $this->addr;
    }

    /**
     * Generated from protobuf field <code>string addr = 1;</code>.
     *
     * @param  string  $var
     * @return $this
     */
    public function setAddr($var)
    {
        GPBUtil::checkString($var, true);
        $this->addr = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .Jason.Chain33.Kernel.Protobuf.ExecAccount ExecAccount = 2;</code>.
     *
     * @return RepeatedField
     */
    public function getExecAccount()
    {
        return $this->ExecAccount;
    }

    /**
     * Generated from protobuf field <code>repeated .Jason.Chain33.Kernel.Protobuf.ExecAccount ExecAccount = 2;</code>.
     *
     * @param  ExecAccount[]|RepeatedField  $var
     * @return $this
     */
    public function setExecAccount($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, GPBType::MESSAGE,
            ExecAccount::class);
        $this->ExecAccount = $arr;

        return $this;
    }
}
