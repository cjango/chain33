<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: common.proto

namespace Jason\Chain33\Kernel\Protobuf;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\Message;
use Google\Protobuf\Internal\RepeatedField;
use GPBMetadata\Common;

/**
 * Generated from protobuf message <code>Jason.Chain33.Kernel.Protobuf.ReplyHashes</code>.
 */
class ReplyHashes extends Message
{
    /**
     * Generated from protobuf field <code>repeated bytes hashes = 1;</code>.
     */
    private $hashes;

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                       Optional. Data for populating the Message object.
     *
     * @var string[]|RepeatedField $hashes
     *                             }
     */
    public function __construct($data = null)
    {
        Common::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated bytes hashes = 1;</code>.
     *
     * @return RepeatedField
     */
    public function getHashes()
    {
        return $this->hashes;
    }

    /**
     * Generated from protobuf field <code>repeated bytes hashes = 1;</code>.
     *
     * @param  string[]|RepeatedField  $var
     * @return $this
     */
    public function setHashes($var)
    {
        $arr          = GPBUtil::checkRepeatedField($var, GPBType::BYTES);
        $this->hashes = $arr;

        return $this;
    }
}
