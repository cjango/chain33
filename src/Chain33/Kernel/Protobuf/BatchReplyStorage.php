<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: storage.proto

namespace Jason\Chain33\Kernel\Protobuf;

use Exception;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\Message;
use Google\Protobuf\Internal\RepeatedField;

/**
 * Generated from protobuf message <code>Jason.Chain33.Kernel.Protobuf.BatchReplyStorage</code>.
 */
class BatchReplyStorage extends Message
{
    /**
     * Generated from protobuf field <code>repeated .Jason.Chain33.Kernel.Protobuf.Storage storages = 1;</code>.
     */
    private RepeatedField $storages;

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                       Optional. Data for populating the Message object.
     *
     * @var Storage[]|RepeatedField $storages
     *                              }
     */
    public function __construct($data = null)
    {
        \GPBMetadata\Storage::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .Jason.Chain33.Kernel.Protobuf.Storage storages = 1;</code>.
     *
     * @return RepeatedField
     */
    public function getStorages(): RepeatedField
    {
        return $this->storages;
    }

    /**
     * Generated from protobuf field <code>repeated .Jason.Chain33.Kernel.Protobuf.Storage storages = 1;</code>.
     *
     * @param  Storage[]|RepeatedField  $var
     * @return $this
     * @throws Exception
     */
    public function setStorages($var): BatchReplyStorage
    {
        $arr            = GPBUtil::checkRepeatedField($var, GPBType::MESSAGE,
            Storage::class);
        $this->storages = $arr;

        return $this;
    }
}
