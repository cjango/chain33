<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: wallet.proto

namespace Jason\Chain33\Kernel\Protobuf;

use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\Message;
use GPBMetadata\Wallet;

/**
 * Generated from protobuf message <code>Jason.Chain33.Kernel.Protobuf.ReqWalletImportPrivkey</code>.
 */
class ReqWalletImportPrivkey extends Message
{
    /**
     * bitcoin 的私钥格式.
     * Generated from protobuf field <code>string privkey = 1;</code>
     */
    protected $privkey = '';

    /**
     * Generated from protobuf field <code>string label = 2;</code>.
     */
    protected $label = '';

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                       Optional. Data for populating the Message object.
     * @var string $privkey
     *                       bitcoin 的私钥格式
     * @var string $label
     *                       }
     */
    public function __construct($data = null)
    {
        Wallet::initOnce();
        parent::__construct($data);
    }

    /**
     * bitcoin 的私钥格式.
     * Generated from protobuf field <code>string privkey = 1;</code>
     *
     * @return string
     */
    public function getPrivkey()
    {
        return $this->privkey;
    }

    /**
     * bitcoin 的私钥格式.
     * Generated from protobuf field <code>string privkey = 1;</code>
     *
     * @param  string  $var
     * @return $this
     */
    public function setPrivkey($var)
    {
        GPBUtil::checkString($var, true);
        $this->privkey = $var;

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
