<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: blockchain.proto

namespace Jason\Chain33\Kernel\Protobuf;

use Exception;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\Message;
use Google\Protobuf\Internal\RepeatedField;
use GPBMetadata\Blockchain;

/**
 * BlockBodys.
 * Generated from protobuf message <code>Jason.Chain33.Kernel.Protobuf.BlockBodys</code>.
 */
class BlockBodys extends Message
{
    /**
     * Generated from protobuf field <code>repeated .Jason.Chain33.Kernel.Protobuf.BlockBody items = 1;</code>.
     */
    private RepeatedField $items;

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                       Optional. Data for populating the Message object.
     *
     * @var BlockBody[]|RepeatedField $items
     *                                }
     */
    public function __construct($data = null)
    {
        Blockchain::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .Jason.Chain33.Kernel.Protobuf.BlockBody items = 1;</code>.
     *
     * @return RepeatedField
     */
    public function getItems(): RepeatedField
    {
        return $this->items;
    }

    /**
     * Generated from protobuf field <code>repeated .Jason.Chain33.Kernel.Protobuf.BlockBody items = 1;</code>.
     *
     * @param  BlockBody[]|RepeatedField  $var
     * @return $this
     * @throws Exception
     */
    public function setItems($var): BlockBodys
    {
        $arr         = GPBUtil::checkRepeatedField($var, GPBType::MESSAGE,
            BlockBody::class);
        $this->items = $arr;

        return $this;
    }
}
