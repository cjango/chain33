<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: transaction.proto

namespace Jason\Chain33\Kernel\Protobuf;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\Message;
use Google\Protobuf\Internal\RepeatedField;

/**
 * Generated from protobuf message <code>Jason.Chain33.Kernel.Protobuf.ReplyCheckTxsExist</code>.
 */
class ReplyCheckTxsExist extends Message
{
    /**
     *存在情况的总个数.
     * Generated from protobuf field <code>uint32 existCount = 2;</code>.
     */
    protected $existCount = 0;

    /**
     *对应请求序列存在标识数组，存在则true，否则false.
     * Generated from protobuf field <code>repeated bool existFlags = 1;</code>.
     */
    private $existFlags;

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                       Optional. Data for populating the Message object.
     *
     * @var bool[]|RepeatedField $existFlags
     *                           对应请求序列存在标识数组，存在则true，否则false
     * @var int $existCount
     *          存在情况的总个数
     *          }
     */
    public function __construct($data = null)
    {
        \GPBMetadata\Transaction::initOnce();
        parent::__construct($data);
    }

    /**
     *对应请求序列存在标识数组，存在则true，否则false.
     * Generated from protobuf field <code>repeated bool existFlags = 1;</code>.
     *
     * @return RepeatedField
     */
    public function getExistFlags()
    {
        return $this->existFlags;
    }

    /**
     *对应请求序列存在标识数组，存在则true，否则false.
     * Generated from protobuf field <code>repeated bool existFlags = 1;</code>.
     *
     * @param  bool[]|RepeatedField  $var
     * @return $this
     */
    public function setExistFlags($var)
    {
        $arr              = GPBUtil::checkRepeatedField($var, GPBType::BOOL);
        $this->existFlags = $arr;

        return $this;
    }

    /**
     *存在情况的总个数.
     * Generated from protobuf field <code>uint32 existCount = 2;</code>.
     *
     * @return int
     */
    public function getExistCount()
    {
        return $this->existCount;
    }

    /**
     *存在情况的总个数.
     * Generated from protobuf field <code>uint32 existCount = 2;</code>.
     *
     * @param  int  $var
     * @return $this
     */
    public function setExistCount($var)
    {
        GPBUtil::checkUint32($var);
        $this->existCount = $var;

        return $this;
    }
}
