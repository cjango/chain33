<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: wallet.proto

namespace Jason\Chain33\Kernel\Protobuf;

use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\Message;
use GPBMetadata\Wallet;

/**
 * Generated from protobuf message <code>Jason.Chain33.Kernel.Protobuf.ReqAccountList</code>.
 */
class ReqAccountList extends Message
{
    /**
     * Generated from protobuf field <code>bool withoutBalance = 1;</code>.
     */
    protected $withoutBalance = false;

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                       Optional. Data for populating the Message object.
     *
     * @var bool $withoutBalance
     *                       }
     */
    public function __construct($data = null)
    {
        Wallet::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bool withoutBalance = 1;</code>.
     *
     * @return bool
     */
    public function getWithoutBalance()
    {
        return $this->withoutBalance;
    }

    /**
     * Generated from protobuf field <code>bool withoutBalance = 1;</code>.
     *
     * @param  bool  $var
     *
     * @return $this
     */
    public function setWithoutBalance($var)
    {
        GPBUtil::checkBool($var);
        $this->withoutBalance = $var;

        return $this;
    }
}
