<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: wallet.proto

namespace Jason\Chain33\Kernel\Protobuf;

use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\Message;
use GPBMetadata\Wallet;

/**
 * Generated from protobuf message <code>Jason.Chain33.Kernel.Protobuf.GenSeedLang</code>.
 */
class GenSeedLang extends Message
{
    /**
     * Generated from protobuf field <code>int32 lang = 1;</code>.
     */
    protected $lang = 0;

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                       Optional. Data for populating the Message object.
     * @var int $lang
     *                       }
     */
    public function __construct($data = null)
    {
        Wallet::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 lang = 1;</code>.
     *
     * @return int
     */
    public function getLang()
    {
        return $this->lang;
    }

    /**
     * Generated from protobuf field <code>int32 lang = 1;</code>.
     *
     * @param  int  $var
     * @return $this
     */
    public function setLang($var)
    {
        GPBUtil::checkInt32($var);
        $this->lang = $var;

        return $this;
    }
}
