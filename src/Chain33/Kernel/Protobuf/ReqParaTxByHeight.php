<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: blockchain.proto

namespace Jason\Chain33\Kernel\Protobuf;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\Message;
use Google\Protobuf\Internal\RepeatedField;
use GPBMetadata\Blockchain;

/**
 *通过高度列表和title获取平行链交易.
 * Generated from protobuf message <code>Jason.Chain33.Kernel.Protobuf.ReqParaTxByHeight</code>
 */
class ReqParaTxByHeight extends Message
{
    /**
     * Generated from protobuf field <code>string title = 2;</code>.
     */
    protected $title = '';

    /**
     * Generated from protobuf field <code>repeated int64 items = 1;</code>.
     */
    private $items;

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                                                                    Optional. Data for populating the Message object.
     *
     * @var int[]|string[]|RepeatedField $items
     * @var string $title
     *                                                                    }
     */
    public function __construct($data = null)
    {
        Blockchain::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated int64 items = 1;</code>.
     *
     * @return RepeatedField
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * Generated from protobuf field <code>repeated int64 items = 1;</code>.
     *
     * @param  int[]|string[]|RepeatedField  $var
     *
     * @return $this
     */
    public function setItems($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, GPBType::INT64);
        $this->items = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string title = 2;</code>.
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Generated from protobuf field <code>string title = 2;</code>.
     *
     * @param  string  $var
     *
     * @return $this
     */
    public function setTitle($var)
    {
        GPBUtil::checkString($var, true);
        $this->title = $var;

        return $this;
    }
}
