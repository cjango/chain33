<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: account.proto

namespace Jason\Chain33\Kernel\Protobuf;

use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Jason.Chain33.Kernel.Protobuf.ReceiptAccountBurn</code>.
 */
class ReceiptAccountBurn extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.Jason.Chain33.Kernel.Protobuf.Account prev = 1;</code>.
     */
    protected $prev = null;
    /**
     * Generated from protobuf field <code>.Jason.Chain33.Kernel.Protobuf.Account current = 2;</code>.
     */
    protected $current = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *                    Optional. Data for populating the Message object.
     *
     *     @var \Jason\Chain33\Kernel\Protobuf\Account $prev
     *     @var \Jason\Chain33\Kernel\Protobuf\Account $current
     * }
     */
    public function __construct($data = null)
    {
        \GPBMetadata\Account::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.Jason.Chain33.Kernel.Protobuf.Account prev = 1;</code>.
     *
     * @return \Jason\Chain33\Kernel\Protobuf\Account|null
     */
    public function getPrev()
    {
        return isset($this->prev) ? $this->prev : null;
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
     * Generated from protobuf field <code>.Jason.Chain33.Kernel.Protobuf.Account prev = 1;</code>.
     *
     * @param  \Jason\Chain33\Kernel\Protobuf\Account $var
     * @return $this
     */
    public function setPrev($var)
    {
        GPBUtil::checkMessage($var, \Jason\Chain33\Kernel\Protobuf\Account::class);
        $this->prev = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Jason.Chain33.Kernel.Protobuf.Account current = 2;</code>.
     *
     * @return \Jason\Chain33\Kernel\Protobuf\Account|null
     */
    public function getCurrent()
    {
        return isset($this->current) ? $this->current : null;
    }

    public function hasCurrent()
    {
        return isset($this->current);
    }

    public function clearCurrent()
    {
        unset($this->current);
    }

    /**
     * Generated from protobuf field <code>.Jason.Chain33.Kernel.Protobuf.Account current = 2;</code>.
     *
     * @param  \Jason\Chain33\Kernel\Protobuf\Account $var
     * @return $this
     */
    public function setCurrent($var)
    {
        GPBUtil::checkMessage($var, \Jason\Chain33\Kernel\Protobuf\Account::class);
        $this->current = $var;

        return $this;
    }
}
