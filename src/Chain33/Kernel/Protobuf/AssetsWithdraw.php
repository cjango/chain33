<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: transaction.proto

namespace Jason\Chain33\Kernel\Protobuf;

use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\Message;

/**
 * Generated from protobuf message <code>Jason.Chain33.Kernel.Protobuf.AssetsWithdraw</code>.
 */
class AssetsWithdraw extends Message
{
    /**
     * Generated from protobuf field <code>string cointoken = 1;</code>.
     */
    protected $cointoken = '';

    /**
     * Generated from protobuf field <code>int64 amount = 2;</code>.
     */
    protected $amount = 0;

    /**
     * Generated from protobuf field <code>bytes note = 3;</code>.
     */
    protected $note = '';

    /**
     * Generated from protobuf field <code>string execName = 4;</code>.
     */
    protected $execName = '';

    /**
     * Generated from protobuf field <code>string to = 5;</code>.
     */
    protected $to = '';

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                        Optional. Data for populating the Message object.
     *
     * @var string $cointoken
     * @var int|string $amount
     * @var string $note
     * @var string $execName
     * @var string $to
     *                        }
     */
    public function __construct($data = null)
    {
        \GPBMetadata\Transaction::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string cointoken = 1;</code>.
     *
     * @return string
     */
    public function getCointoken()
    {
        return $this->cointoken;
    }

    /**
     * Generated from protobuf field <code>string cointoken = 1;</code>.
     *
     * @param  string  $var
     *
     * @return $this
     */
    public function setCointoken($var)
    {
        GPBUtil::checkString($var, true);
        $this->cointoken = $var;

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
     *
     * @return $this
     */
    public function setAmount($var)
    {
        GPBUtil::checkInt64($var);
        $this->amount = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes note = 3;</code>.
     *
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Generated from protobuf field <code>bytes note = 3;</code>.
     *
     * @param  string  $var
     *
     * @return $this
     */
    public function setNote($var)
    {
        GPBUtil::checkString($var, false);
        $this->note = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string execName = 4;</code>.
     *
     * @return string
     */
    public function getExecName()
    {
        return $this->execName;
    }

    /**
     * Generated from protobuf field <code>string execName = 4;</code>.
     *
     * @param  string  $var
     *
     * @return $this
     */
    public function setExecName($var)
    {
        GPBUtil::checkString($var, true);
        $this->execName = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string to = 5;</code>.
     *
     * @return string
     */
    public function getTo()
    {
        return $this->to;
    }

    /**
     * Generated from protobuf field <code>string to = 5;</code>.
     *
     * @param  string  $var
     *
     * @return $this
     */
    public function setTo($var)
    {
        GPBUtil::checkString($var, true);
        $this->to = $var;

        return $this;
    }
}
