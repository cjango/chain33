<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: wallet.proto

namespace Jason\Chain33\Kernel\Protobuf;

use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\Message;
use GPBMetadata\Wallet;

/**
 * Generated from protobuf message <code>Jason.Chain33.Kernel.Protobuf.ReqTokenRevokeCreate</code>.
 */
class ReqTokenRevokeCreate extends Message
{
    /**
     * Generated from protobuf field <code>string revoker_addr = 1;</code>.
     */
    protected $revoker_addr = '';

    /**
     * Generated from protobuf field <code>string symbol = 2;</code>.
     */
    protected $symbol = '';

    /**
     * Generated from protobuf field <code>string owner_addr = 3;</code>.
     */
    protected $owner_addr = '';

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                       Optional. Data for populating the Message object.
     *
     * @var string $revoker_addr
     * @var string $symbol
     * @var string $owner_addr
     *             }
     */
    public function __construct($data = null)
    {
        Wallet::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string revoker_addr = 1;</code>.
     *
     * @return string
     */
    public function getRevokerAddr()
    {
        return $this->revoker_addr;
    }

    /**
     * Generated from protobuf field <code>string revoker_addr = 1;</code>.
     *
     * @param  string  $var
     * @return $this
     */
    public function setRevokerAddr($var)
    {
        GPBUtil::checkString($var, true);
        $this->revoker_addr = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string symbol = 2;</code>.
     *
     * @return string
     */
    public function getSymbol()
    {
        return $this->symbol;
    }

    /**
     * Generated from protobuf field <code>string symbol = 2;</code>.
     *
     * @param  string  $var
     * @return $this
     */
    public function setSymbol($var)
    {
        GPBUtil::checkString($var, true);
        $this->symbol = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string owner_addr = 3;</code>.
     *
     * @return string
     */
    public function getOwnerAddr()
    {
        return $this->owner_addr;
    }

    /**
     * Generated from protobuf field <code>string owner_addr = 3;</code>.
     *
     * @param  string  $var
     * @return $this
     */
    public function setOwnerAddr($var)
    {
        GPBUtil::checkString($var, true);
        $this->owner_addr = $var;

        return $this;
    }
}
