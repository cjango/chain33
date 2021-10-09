<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: blockchain.proto

namespace Jason\Chain33\Kernel\Protobuf;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\Message;
use GPBMetadata\Blockchain;

/**
 * resp.
 * Generated from protobuf message <code>Jason.Chain33.Kernel.Protobuf.Headers</code>
 */
class Headers extends Message
{
    /**
     * Generated from protobuf field <code>repeated .Jason.Chain33.Kernel.Protobuf.Header items = 1;</code>.
     */
    private $items;

    /**
     * Constructor.
     *
     * @param  array                                                                        $data  {
     *                                                                                             Optional. Data for populating the Message object.
     * @var \Jason\Chain33\Kernel\Protobuf\Header[]|\Google\Protobuf\Internal\RepeatedField $items
     *                                                                                             }
     */
    public function __construct($data = null)
    {
        Blockchain::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .Jason.Chain33.Kernel.Protobuf.Header items = 1;</code>.
     *
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * Generated from protobuf field <code>repeated .Jason.Chain33.Kernel.Protobuf.Header items = 1;</code>.
     *
     * @param  \Jason\Chain33\Kernel\Protobuf\Header[]|\Google\Protobuf\Internal\RepeatedField  $var
     * @return $this
     */
    public function setItems($var)
    {
        $arr         = GPBUtil::checkRepeatedField($var, GPBType::MESSAGE,
            Header::class);
        $this->items = $arr;

        return $this;
    }
}
