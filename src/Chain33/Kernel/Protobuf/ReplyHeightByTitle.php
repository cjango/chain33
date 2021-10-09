<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: blockchain.proto

namespace Jason\Chain33\Kernel\Protobuf;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\Message;
use GPBMetadata\Blockchain;

/**
 * Generated from protobuf message <code>Jason.Chain33.Kernel.Protobuf.ReplyHeightByTitle</code>.
 */
class ReplyHeightByTitle extends Message
{
    /**
     * Generated from protobuf field <code>string title = 1;</code>.
     */
    protected $title = '';

    /**
     * Generated from protobuf field <code>repeated .Jason.Chain33.Kernel.Protobuf.BlockInfo items = 2;</code>.
     */
    private $items;

    /**
     * Constructor.
     *
     * @param  array                                                                           $data  {
     *                                                                                                Optional. Data for populating the Message object.
     * @var string                                                                             $title
     * @var \Jason\Chain33\Kernel\Protobuf\BlockInfo[]|\Google\Protobuf\Internal\RepeatedField $items
     *                                                                                                }
     */
    public function __construct($data = null)
    {
        Blockchain::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string title = 1;</code>.
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Generated from protobuf field <code>string title = 1;</code>.
     *
     * @param  string  $var
     * @return $this
     */
    public function setTitle($var)
    {
        GPBUtil::checkString($var, true);
        $this->title = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .Jason.Chain33.Kernel.Protobuf.BlockInfo items = 2;</code>.
     *
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * Generated from protobuf field <code>repeated .Jason.Chain33.Kernel.Protobuf.BlockInfo items = 2;</code>.
     *
     * @param  \Jason\Chain33\Kernel\Protobuf\BlockInfo[]|\Google\Protobuf\Internal\RepeatedField  $var
     * @return $this
     */
    public function setItems($var)
    {
        $arr         = GPBUtil::checkRepeatedField($var, GPBType::MESSAGE,
            BlockInfo::class);
        $this->items = $arr;

        return $this;
    }
}
