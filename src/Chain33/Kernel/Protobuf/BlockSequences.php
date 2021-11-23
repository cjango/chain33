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
 * resp.
 * Generated from protobuf message <code>Jason.Chain33.Kernel.Protobuf.BlockSequences</code>.
 */
class BlockSequences extends Message
{
    /**
     * Generated from protobuf field <code>repeated .Jason.Chain33.Kernel.Protobuf.BlockSequence items = 1;</code>.
     */
    private $items;

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                       Optional. Data for populating the Message object.
     *
     * @var BlockSequence[]|RepeatedField $items
     *                                    }
     */
    public function __construct($data = null)
    {
        Blockchain::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .Jason.Chain33.Kernel.Protobuf.BlockSequence items = 1;</code>.
     *
     * @return RepeatedField
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * Generated from protobuf field <code>repeated .Jason.Chain33.Kernel.Protobuf.BlockSequence items = 1;</code>.
     *
     * @param  BlockSequence[]|RepeatedField  $var
     * @return $this
     */
    public function setItems($var)
    {
        $arr         = GPBUtil::checkRepeatedField($var, GPBType::MESSAGE,
            BlockSequence::class);
        $this->items = $arr;

        return $this;
    }
}
