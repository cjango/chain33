<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: wallet.proto

namespace Jason\Chain33\Kernel\Protobuf;

use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\Message;
use GPBMetadata\Wallet;

/**
 * Generated from protobuf message <code>Jason.Chain33.Kernel.Protobuf.ReqNewAccount</code>.
 */
class ReqNewAccount extends Message
{
    /**
     * Generated from protobuf field <code>string label = 1;</code>.
     */
    protected $label = '';

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                       Optional. Data for populating the Message object.
     *
     * @var string $label
     *             }
     */
    public function __construct($data = null)
    {
        Wallet::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string label = 1;</code>.
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Generated from protobuf field <code>string label = 1;</code>.
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
