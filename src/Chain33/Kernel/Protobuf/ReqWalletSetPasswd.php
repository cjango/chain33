<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: wallet.proto

namespace Jason\Chain33\Kernel\Protobuf;

use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\Message;
use GPBMetadata\Wallet;

/**
 * Generated from protobuf message <code>Jason.Chain33.Kernel.Protobuf.ReqWalletSetPasswd</code>.
 */
class ReqWalletSetPasswd extends Message
{
    /**
     * Generated from protobuf field <code>string oldPass = 1;</code>.
     */
    protected $oldPass = '';

    /**
     * Generated from protobuf field <code>string newPass = 2;</code>.
     */
    protected $newPass = '';

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                       Optional. Data for populating the Message object.
     *
     * @var string $oldPass
     * @var string $newPass
     *             }
     */
    public function __construct($data = null)
    {
        Wallet::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string oldPass = 1;</code>.
     *
     * @return string
     */
    public function getOldPass()
    {
        return $this->oldPass;
    }

    /**
     * Generated from protobuf field <code>string oldPass = 1;</code>.
     *
     * @param  string  $var
     * @return $this
     */
    public function setOldPass($var)
    {
        GPBUtil::checkString($var, true);
        $this->oldPass = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string newPass = 2;</code>.
     *
     * @return string
     */
    public function getNewPass()
    {
        return $this->newPass;
    }

    /**
     * Generated from protobuf field <code>string newPass = 2;</code>.
     *
     * @param  string  $var
     * @return $this
     */
    public function setNewPass($var)
    {
        GPBUtil::checkString($var, true);
        $this->newPass = $var;

        return $this;
    }
}
