<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: storage.proto

namespace Jason\Chain33\Kernel\Protobuf;

use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Jason.Chain33.Kernel.Protobuf.BatchReplyStorage</code>.
 */
class BatchReplyStorage extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .Jason.Chain33.Kernel.Protobuf.Storage storages = 1;</code>.
     */
    private $storages;

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                       Optional. Data for populating the Message object.
     *
     *     @var \Jason\Chain33\Kernel\Protobuf\Storage[]|\Google\Protobuf\Internal\RepeatedField $storages
     * }
     */
    public function __construct($data = null)
    {
        \GPBMetadata\Storage::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .Jason.Chain33.Kernel.Protobuf.Storage storages = 1;</code>.
     *
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getStorages()
    {
        return $this->storages;
    }

    /**
     * Generated from protobuf field <code>repeated .Jason.Chain33.Kernel.Protobuf.Storage storages = 1;</code>.
     *
     * @param  \Jason\Chain33\Kernel\Protobuf\Storage[]|\Google\Protobuf\Internal\RepeatedField  $var
     * @return $this
     */
    public function setStorages($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Jason\Chain33\Kernel\Protobuf\Storage::class);
        $this->storages = $arr;

        return $this;
    }
}
