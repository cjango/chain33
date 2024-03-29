<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: wallet.proto

namespace Jason\Chain33\Kernel\Protobuf;

use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\Message;
use GPBMetadata\Wallet;

/**
 *存储钱包的种子
 *   seed : 钱包种子
 *   passwd :钱包密码
 * Generated from protobuf message <code>Jason.Chain33.Kernel.Protobuf.SaveSeedByPw</code>.
 */
class SaveSeedByPw extends Message
{
    /**
     * Generated from protobuf field <code>string seed = 1;</code>.
     */
    protected $seed = '';

    /**
     * Generated from protobuf field <code>string passwd = 2;</code>.
     */
    protected $passwd = '';

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                       Optional. Data for populating the Message object.
     *
     * @var string $seed
     * @var string $passwd
     *             }
     */
    public function __construct($data = null)
    {
        Wallet::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string seed = 1;</code>.
     *
     * @return string
     */
    public function getSeed()
    {
        return $this->seed;
    }

    /**
     * Generated from protobuf field <code>string seed = 1;</code>.
     *
     * @param  string  $var
     * @return $this
     */
    public function setSeed($var)
    {
        GPBUtil::checkString($var, true);
        $this->seed = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string passwd = 2;</code>.
     *
     * @return string
     */
    public function getPasswd()
    {
        return $this->passwd;
    }

    /**
     * Generated from protobuf field <code>string passwd = 2;</code>.
     *
     * @param  string  $var
     * @return $this
     */
    public function setPasswd($var)
    {
        GPBUtil::checkString($var, true);
        $this->passwd = $var;

        return $this;
    }
}
