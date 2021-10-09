<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: transaction.proto

namespace Jason\Chain33\Kernel\Protobuf;

use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\Message;

/**
 * Generated from protobuf message <code>Jason.Chain33.Kernel.Protobuf.CreateTx</code>.
 */
class CreateTx extends Message
{
    /**
     * Generated from protobuf field <code>string to = 1;</code>.
     */
    protected $to = '';

    /**
     * Generated from protobuf field <code>int64 amount = 2;</code>.
     */
    protected $amount = 0;

    /**
     * Generated from protobuf field <code>int64 fee = 3;</code>.
     */
    protected $fee = 0;

    /**
     * Generated from protobuf field <code>bytes note = 4;</code>.
     */
    protected $note = '';

    /**
     * Generated from protobuf field <code>bool isWithdraw = 5;</code>.
     */
    protected $isWithdraw = false;

    /**
     * Generated from protobuf field <code>bool isToken = 6;</code>.
     */
    protected $isToken = false;

    /**
     * Generated from protobuf field <code>string tokenSymbol = 7;</code>.
     */
    protected $tokenSymbol = '';

    /**
     * Generated from protobuf field <code>string execName = 8;</code>.
     */
    protected $execName = '';

    /**
     * Generated from protobuf field <code>string execer = 9;</code>.
     */
    protected $execer = '';

    /**
     * Constructor.
     *
     * @param  array   $data  {
     *                        Optional. Data for populating the Message object.
     * @var string     $to
     * @var int|string $amount
     * @var int|string $fee
     * @var string     $note
     * @var bool       $isWithdraw
     * @var bool       $isToken
     * @var string     $tokenSymbol
     * @var string     $execName
     * @var string     $execer
     *                        }
     */
    public function __construct($data = null)
    {
        \GPBMetadata\Transaction::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string to = 1;</code>.
     *
     * @return string
     */
    public function getTo()
    {
        return $this->to;
    }

    /**
     * Generated from protobuf field <code>string to = 1;</code>.
     *
     * @param  string  $var
     * @return $this
     */
    public function setTo($var)
    {
        GPBUtil::checkString($var, true);
        $this->to = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 amount = 2;</code>.
     *
     * @return int|string
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Generated from protobuf field <code>int64 amount = 2;</code>.
     *
     * @param  int|string  $var
     * @return $this
     */
    public function setAmount($var)
    {
        GPBUtil::checkInt64($var);
        $this->amount = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 fee = 3;</code>.
     *
     * @return int|string
     */
    public function getFee()
    {
        return $this->fee;
    }

    /**
     * Generated from protobuf field <code>int64 fee = 3;</code>.
     *
     * @param  int|string  $var
     * @return $this
     */
    public function setFee($var)
    {
        GPBUtil::checkInt64($var);
        $this->fee = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes note = 4;</code>.
     *
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Generated from protobuf field <code>bytes note = 4;</code>.
     *
     * @param  string  $var
     * @return $this
     */
    public function setNote($var)
    {
        GPBUtil::checkString($var, false);
        $this->note = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool isWithdraw = 5;</code>.
     *
     * @return bool
     */
    public function getIsWithdraw()
    {
        return $this->isWithdraw;
    }

    /**
     * Generated from protobuf field <code>bool isWithdraw = 5;</code>.
     *
     * @param  bool  $var
     * @return $this
     */
    public function setIsWithdraw($var)
    {
        GPBUtil::checkBool($var);
        $this->isWithdraw = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool isToken = 6;</code>.
     *
     * @return bool
     */
    public function getIsToken()
    {
        return $this->isToken;
    }

    /**
     * Generated from protobuf field <code>bool isToken = 6;</code>.
     *
     * @param  bool  $var
     * @return $this
     */
    public function setIsToken($var)
    {
        GPBUtil::checkBool($var);
        $this->isToken = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string tokenSymbol = 7;</code>.
     *
     * @return string
     */
    public function getTokenSymbol()
    {
        return $this->tokenSymbol;
    }

    /**
     * Generated from protobuf field <code>string tokenSymbol = 7;</code>.
     *
     * @param  string  $var
     * @return $this
     */
    public function setTokenSymbol($var)
    {
        GPBUtil::checkString($var, true);
        $this->tokenSymbol = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string execName = 8;</code>.
     *
     * @return string
     */
    public function getExecName()
    {
        return $this->execName;
    }

    /**
     * Generated from protobuf field <code>string execName = 8;</code>.
     *
     * @param  string  $var
     * @return $this
     */
    public function setExecName($var)
    {
        GPBUtil::checkString($var, true);
        $this->execName = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string execer = 9;</code>.
     *
     * @return string
     */
    public function getExecer()
    {
        return $this->execer;
    }

    /**
     * Generated from protobuf field <code>string execer = 9;</code>.
     *
     * @param  string  $var
     * @return $this
     */
    public function setExecer($var)
    {
        GPBUtil::checkString($var, true);
        $this->execer = $var;

        return $this;
    }
}
