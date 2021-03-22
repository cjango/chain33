<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: executor.proto

namespace Jason\Chain33\Kernel\Protobuf;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Jason.Chain33.Kernel.Protobuf.ReceiptConfig</code>
 */
class ReceiptConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.Jason.Chain33.Kernel.Protobuf.ConfigItem prev = 1;</code>
     */
    protected $prev = null;
    /**
     * Generated from protobuf field <code>.Jason.Chain33.Kernel.Protobuf.ConfigItem current = 2;</code>
     */
    protected $current = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Jason\Chain33\Kernel\Protobuf\ConfigItem $prev
     *     @type \Jason\Chain33\Kernel\Protobuf\ConfigItem $current
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Executor::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.Jason.Chain33.Kernel.Protobuf.ConfigItem prev = 1;</code>
     * @return \Jason\Chain33\Kernel\Protobuf\ConfigItem|null
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
     * Generated from protobuf field <code>.Jason.Chain33.Kernel.Protobuf.ConfigItem prev = 1;</code>
     * @param \Jason\Chain33\Kernel\Protobuf\ConfigItem $var
     * @return $this
     */
    public function setPrev($var)
    {
        GPBUtil::checkMessage($var, \Jason\Chain33\Kernel\Protobuf\ConfigItem::class);
        $this->prev = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Jason.Chain33.Kernel.Protobuf.ConfigItem current = 2;</code>
     * @return \Jason\Chain33\Kernel\Protobuf\ConfigItem|null
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
     * Generated from protobuf field <code>.Jason.Chain33.Kernel.Protobuf.ConfigItem current = 2;</code>
     * @param \Jason\Chain33\Kernel\Protobuf\ConfigItem $var
     * @return $this
     */
    public function setCurrent($var)
    {
        GPBUtil::checkMessage($var, \Jason\Chain33\Kernel\Protobuf\ConfigItem::class);
        $this->current = $var;

        return $this;
    }

}
