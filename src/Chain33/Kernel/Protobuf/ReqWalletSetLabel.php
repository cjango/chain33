<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: wallet.proto

namespace Jason\Chain33\Kernel\Protobuf;

use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\Message;
use GPBMetadata\Wallet;

/**
 * Generated from protobuf message <code>Jason.Chain33.Kernel.Protobuf.ReqWalletSetLabel</code>.
 */
class ReqWalletSetLabel extends Message
{
    /**
     * Generated from protobuf field <code>string addr = 1;</code>.
     */
    protected $addr = '';

    /**
     * Generated from protobuf field <code>string label = 2;</code>.
     */
    protected $label = '';

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                       Optional. Data for populating the Message object.
     *
     * @var string $addr
     * @var string $label
     *             }
     */
    public function __construct($data = null)
    {
        Wallet::initOnce();
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
     * Generated from protobuf field <code>string label = 2;</code>.
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Generated from protobuf field <code>string label = 2;</code>.
     *
     * @param  string  $var
     * @return $this
     */
    public function setLabel($var)
    {
        GPBUtil::checkString($var, true);
        $this->label = $var;

        return $this;
    }
}
