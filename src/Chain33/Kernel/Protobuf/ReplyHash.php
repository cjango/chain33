<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: common.proto

namespace Jason\Chain33\Kernel\Protobuf;

use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Jason.Chain33.Kernel.Protobuf.ReplyHash</code>.
 */
class ReplyHash extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bytes hash = 1;</code>.
     */
    protected $hash = '';

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                       Optional. Data for populating the Message object.
     *
     *     @var string $hash
     * }
     */
    public function __construct($data = null)
    {
        \GPBMetadata\Common::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bytes hash = 1;</code>.
     *
     * @return string
     */
    public function getHash()
    {
        return $this->hash;
    }

    /**
     * Generated from protobuf field <code>bytes hash = 1;</code>.
     *
     * @param  string  $var
     * @return $this
     */
    public function setHash($var)
    {
        GPBUtil::checkString($var, false);
        $this->hash = $var;

        return $this;
    }
}
