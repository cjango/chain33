<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: account.proto

namespace Jason\Chain33\Kernel\Protobuf;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\Message;
use Google\Protobuf\Internal\RepeatedField;

/**
 * Account 的列表.
 * Generated from protobuf message <code>Jason.Chain33.Kernel.Protobuf.Accounts</code>.
 */
class Accounts extends Message
{
    /**
     * Generated from protobuf field <code>repeated .Jason.Chain33.Kernel.Protobuf.Account acc = 1;</code>.
     */
    private $acc;

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                       Optional. Data for populating the Message object.
     *
     * @var Account[]|RepeatedField $acc
     *                              }
     */
    public function __construct($data = null)
    {
        \GPBMetadata\Account::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .Jason.Chain33.Kernel.Protobuf.Account acc = 1;</code>.
     *
     * @return RepeatedField
     */
    public function getAcc()
    {
        return $this->acc;
    }

    /**
     * Generated from protobuf field <code>repeated .Jason.Chain33.Kernel.Protobuf.Account acc = 1;</code>.
     *
     * @param  Account[]|RepeatedField  $var
     * @return $this
     */
    public function setAcc($var)
    {
        $arr       = GPBUtil::checkRepeatedField($var, GPBType::MESSAGE,
            Account::class);
        $this->acc = $arr;

        return $this;
    }
}
