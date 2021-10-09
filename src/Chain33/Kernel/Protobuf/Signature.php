<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: transaction.proto

namespace Jason\Chain33\Kernel\Protobuf;

use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\Message;

/**
 *对于一个交易组中的交易，要么全部成功，要么全部失败
 *这个要好好设计一下
 *最好交易构成一个链条[prevhash].独立的交易构成链条
 *只要这个组中有一个执行是出错的，那么就执行不成功
 *三种签名支持
 * ty = 1 -> secp256k1
 * ty = 2 -> ed25519
 * ty = 3 -> sm2
 * ty = 4 -> OnetimeED25519
 * ty = 5 -> RingBaseonED25519.
 * Generated from protobuf message <code>Jason.Chain33.Kernel.Protobuf.Signature</code>
 */
class Signature extends Message
{
    /**
     * Generated from protobuf field <code>int32 ty = 1;</code>.
     */
    protected $ty = 0;

    /**
     * Generated from protobuf field <code>bytes pubkey = 2;</code>.
     */
    protected $pubkey = '';

    /**
     *当ty为5时，格式应该用RingSignature去解析.
     * Generated from protobuf field <code>bytes signature = 3;</code>
     */
    protected $signature = '';

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                       Optional. Data for populating the Message object.
     * @var int $ty
     * @var string $pubkey
     * @var string $signature
     *                       当ty为5时，格式应该用RingSignature去解析
     *                       }
     */
    public function __construct($data = null)
    {
        \GPBMetadata\Transaction::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 ty = 1;</code>.
     *
     * @return int
     */
    public function getTy()
    {
        return $this->ty;
    }

    /**
     * Generated from protobuf field <code>int32 ty = 1;</code>.
     *
     * @param  int  $var
     * @return $this
     */
    public function setTy($var)
    {
        GPBUtil::checkInt32($var);
        $this->ty = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes pubkey = 2;</code>.
     *
     * @return string
     */
    public function getPubkey()
    {
        return $this->pubkey;
    }

    /**
     * Generated from protobuf field <code>bytes pubkey = 2;</code>.
     *
     * @param  string  $var
     * @return $this
     */
    public function setPubkey($var)
    {
        GPBUtil::checkString($var, false);
        $this->pubkey = $var;

        return $this;
    }

    /**
     *当ty为5时，格式应该用RingSignature去解析.
     * Generated from protobuf field <code>bytes signature = 3;</code>
     *
     * @return string
     */
    public function getSignature()
    {
        return $this->signature;
    }

    /**
     *当ty为5时，格式应该用RingSignature去解析.
     * Generated from protobuf field <code>bytes signature = 3;</code>
     *
     * @param  string  $var
     * @return $this
     */
    public function setSignature($var)
    {
        GPBUtil::checkString($var, false);
        $this->signature = $var;

        return $this;
    }
}
