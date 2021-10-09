<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: account.proto

namespace Jason\Chain33\Kernel\Protobuf;

use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\Message;

/**
 *铸币账户余额增加.
 * Generated from protobuf message <code>Jason.Chain33.Kernel.Protobuf.ReceiptAccountMint</code>
 */
class ReceiptAccountMint extends Message
{
    /**
     *铸币前.
     * Generated from protobuf field <code>.Jason.Chain33.Kernel.Protobuf.Account prev = 1;</code>
     */
    protected $prev = null;

    /**
     *铸币后.
     * Generated from protobuf field <code>.Jason.Chain33.Kernel.Protobuf.Account current = 2;</code>
     */
    protected $current = null;

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                                                    Optional. Data for populating the Message object.
     *
     * @var Account $prev
     *                                                    铸币前
     * @var Account $current
     *                                                    铸币后
     *                                                    }
     */
    public function __construct($data = null)
    {
        \GPBMetadata\Account::initOnce();
        parent::__construct($data);
    }

    /**
     *铸币前.
     * Generated from protobuf field <code>.Jason.Chain33.Kernel.Protobuf.Account prev = 1;</code>
     *
     * @return Account|null
     */
    public function getPrev()
    {
        return isset($this->prev) ? $this->prev : null;
    }

    /**
     *铸币前.
     * Generated from protobuf field <code>.Jason.Chain33.Kernel.Protobuf.Account prev = 1;</code>
     *
     * @param  Account  $var
     *
     * @return $this
     */
    public function setPrev($var)
    {
        GPBUtil::checkMessage($var, Account::class);
        $this->prev = $var;

        return $this;
    }

    public function hasPrev()
    {
        return isset($this->prev);
    }

    public function clearPrev()
    {
        unset($this->prev);
    }

    /**
     *铸币后.
     * Generated from protobuf field <code>.Jason.Chain33.Kernel.Protobuf.Account current = 2;</code>
     *
     * @return Account|null
     */
    public function getCurrent()
    {
        return isset($this->current) ? $this->current : null;
    }

    /**
     *铸币后.
     * Generated from protobuf field <code>.Jason.Chain33.Kernel.Protobuf.Account current = 2;</code>
     *
     * @param  Account  $var
     *
     * @return $this
     */
    public function setCurrent($var)
    {
        GPBUtil::checkMessage($var, Account::class);
        $this->current = $var;

        return $this;
    }

    public function hasCurrent()
    {
        return isset($this->current);
    }

    public function clearCurrent()
    {
        unset($this->current);
    }
}
