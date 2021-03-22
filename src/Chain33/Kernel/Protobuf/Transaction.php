<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: transaction.proto

namespace Jason\Chain33\Kernel\Protobuf;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Jason.Chain33.Kernel.Protobuf.Transaction</code>
 */
class Transaction extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bytes execer = 1;</code>
     */
    protected $execer = '';
    /**
     * Generated from protobuf field <code>bytes payload = 2;</code>
     */
    protected $payload = '';
    /**
     * Generated from protobuf field <code>.Jason.Chain33.Kernel.Protobuf.Signature signature = 3;</code>
     */
    protected $signature = null;
    /**
     * Generated from protobuf field <code>int64 fee = 4;</code>
     */
    protected $fee = 0;
    /**
     * Generated from protobuf field <code>int64 expire = 5;</code>
     */
    protected $expire = 0;
    /**
     *随机ID，可以防止payload 相同的时候，交易重复
     *
     * Generated from protobuf field <code>int64 nonce = 6;</code>
     */
    protected $nonce = 0;
    /**
     *对方地址，如果没有对方地址，可以为空
     *
     * Generated from protobuf field <code>string to = 7;</code>
     */
    protected $to = '';
    /**
     * Generated from protobuf field <code>int32 groupCount = 8;</code>
     */
    protected $groupCount = 0;
    /**
     * Generated from protobuf field <code>bytes header = 9;</code>
     */
    protected $header = '';
    /**
     * Generated from protobuf field <code>bytes next = 10;</code>
     */
    protected $next = '';
    /**
     * Generated from protobuf field <code>int32 chainID = 11;</code>
     */
    protected $chainID = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $execer
     *     @type string $payload
     *     @type \Jason\Chain33\Kernel\Protobuf\Signature $signature
     *     @type int|string $fee
     *     @type int|string $expire
     *     @type int|string $nonce
     *          随机ID，可以防止payload 相同的时候，交易重复
     *     @type string $to
     *          对方地址，如果没有对方地址，可以为空
     *     @type int $groupCount
     *     @type string $header
     *     @type string $next
     *     @type int $chainID
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Transaction::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bytes execer = 1;</code>
     * @return string
     */
    public function getExecer()
    {
        return $this->execer;
    }

    /**
     * Generated from protobuf field <code>bytes execer = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setExecer($var)
    {
        GPBUtil::checkString($var, False);
        $this->execer = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes payload = 2;</code>
     * @return string
     */
    public function getPayload()
    {
        return $this->payload;
    }

    /**
     * Generated from protobuf field <code>bytes payload = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setPayload($var)
    {
        GPBUtil::checkString($var, False);
        $this->payload = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Jason.Chain33.Kernel.Protobuf.Signature signature = 3;</code>
     * @return \Jason\Chain33\Kernel\Protobuf\Signature|null
     */
    public function getSignature()
    {
        return isset($this->signature) ? $this->signature : null;
    }

    public function hasSignature()
    {
        return isset($this->signature);
    }

    public function clearSignature()
    {
        unset($this->signature);
    }

    /**
     * Generated from protobuf field <code>.Jason.Chain33.Kernel.Protobuf.Signature signature = 3;</code>
     * @param \Jason\Chain33\Kernel\Protobuf\Signature $var
     * @return $this
     */
    public function setSignature($var)
    {
        GPBUtil::checkMessage($var, \Jason\Chain33\Kernel\Protobuf\Signature::class);
        $this->signature = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 fee = 4;</code>
     * @return int|string
     */
    public function getFee()
    {
        return $this->fee;
    }

    /**
     * Generated from protobuf field <code>int64 fee = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setFee($var)
    {
        GPBUtil::checkInt64($var);
        $this->fee = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 expire = 5;</code>
     * @return int|string
     */
    public function getExpire()
    {
        return $this->expire;
    }

    /**
     * Generated from protobuf field <code>int64 expire = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setExpire($var)
    {
        GPBUtil::checkInt64($var);
        $this->expire = $var;

        return $this;
    }

    /**
     *随机ID，可以防止payload 相同的时候，交易重复
     *
     * Generated from protobuf field <code>int64 nonce = 6;</code>
     * @return int|string
     */
    public function getNonce()
    {
        return $this->nonce;
    }

    /**
     *随机ID，可以防止payload 相同的时候，交易重复
     *
     * Generated from protobuf field <code>int64 nonce = 6;</code>
     * @param int|string $var
     * @return $this
     */
    public function setNonce($var)
    {
        GPBUtil::checkInt64($var);
        $this->nonce = $var;

        return $this;
    }

    /**
     *对方地址，如果没有对方地址，可以为空
     *
     * Generated from protobuf field <code>string to = 7;</code>
     * @return string
     */
    public function getTo()
    {
        return $this->to;
    }

    /**
     *对方地址，如果没有对方地址，可以为空
     *
     * Generated from protobuf field <code>string to = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setTo($var)
    {
        GPBUtil::checkString($var, True);
        $this->to = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 groupCount = 8;</code>
     * @return int
     */
    public function getGroupCount()
    {
        return $this->groupCount;
    }

    /**
     * Generated from protobuf field <code>int32 groupCount = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setGroupCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->groupCount = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes header = 9;</code>
     * @return string
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Generated from protobuf field <code>bytes header = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setHeader($var)
    {
        GPBUtil::checkString($var, False);
        $this->header = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes next = 10;</code>
     * @return string
     */
    public function getNext()
    {
        return $this->next;
    }

    /**
     * Generated from protobuf field <code>bytes next = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setNext($var)
    {
        GPBUtil::checkString($var, False);
        $this->next = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 chainID = 11;</code>
     * @return int
     */
    public function getChainID()
    {
        return $this->chainID;
    }

    /**
     * Generated from protobuf field <code>int32 chainID = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setChainID($var)
    {
        GPBUtil::checkInt32($var);
        $this->chainID = $var;

        return $this;
    }

}
