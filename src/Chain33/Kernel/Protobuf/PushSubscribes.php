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
 * Generated from protobuf message <code>Jason.Chain33.Kernel.Protobuf.PushSubscribes</code>.
 */
class PushSubscribes extends Message
{
    /**
     * Generated from protobuf field <code>repeated .Jason.Chain33.Kernel.Protobuf.PushSubscribeReq pushes = 1;</code>.
     */
    private $pushes;

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                                                                                                       Optional. Data for populating the Message object.
     *
     * @var PushSubscribeReq[]|RepeatedField $pushes
     *                                                                                                       }
     */
    public function __construct($data = null)
    {
        Blockchain::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .Jason.Chain33.Kernel.Protobuf.PushSubscribeReq pushes = 1;</code>.
     *
     * @return RepeatedField
     */
    public function getPushes()
    {
        return $this->pushes;
    }

    /**
     * Generated from protobuf field <code>repeated .Jason.Chain33.Kernel.Protobuf.PushSubscribeReq pushes = 1;</code>.
     *
     * @param  PushSubscribeReq[]|RepeatedField  $var
     *
     * @return $this
     */
    public function setPushes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, GPBType::MESSAGE,
            PushSubscribeReq::class);
        $this->pushes = $arr;

        return $this;
    }
}
