<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: common.proto

namespace Jason\Chain33\Kernel\Protobuf;

use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Jason.Chain33.Kernel.Protobuf.ReplyHashes</code>.
 */
class ReplyHashes extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated bytes hashes = 1;</code>.
     */
    private $hashes;

    /**
     * Constructor.
     *
     * @param array $data {
     *                    Optional. Data for populating the Message object.
     *
     *     @var string[]|\Google\Protobuf\Internal\RepeatedField $hashes
     * }
     */
    public function __construct($data = null)
    {
        \GPBMetadata\Common::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated bytes hashes = 1;</code>.
     *
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getHashes()
    {
        return $this->hashes;
    }

    /**
     * Generated from protobuf field <code>repeated bytes hashes = 1;</code>.
     *
     * @param  string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setHashes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::BYTES);
        $this->hashes = $arr;

        return $this;
    }
}
