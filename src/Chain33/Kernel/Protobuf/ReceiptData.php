<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: transaction.proto

namespace Jason\Chain33\Kernel\Protobuf;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\Message;
use Google\Protobuf\Internal\RepeatedField;

/**
 * Generated from protobuf message <code>Jason.Chain33.Kernel.Protobuf.ReceiptData</code>.
 */
class ReceiptData extends Message
{
    /**
     * Generated from protobuf field <code>int32 ty = 1;</code>.
     */
    protected $ty = 0;

    /**
     * Generated from protobuf field <code>repeated .Jason.Chain33.Kernel.Protobuf.ReceiptLog logs = 3;</code>.
     */
    private $logs;

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                       Optional. Data for populating the Message object.
     *
     * @var int $ty
     * @var ReceiptLog[]|RepeatedField $logs
     *                                 }
     */
    public function __construct($data = null)
    {
        \GPBMetadata\Transaction::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 ty = 1;</code>.
     *
     * @return int
     */
    public function getTy()
    {
        return $this->ty;
    }

    /**
     * Generated from protobuf field <code>int32 ty = 1;</code>.
     *
     * @param  int  $var
     * @return $this
     */
    public function setTy($var)
    {
        GPBUtil::checkInt32($var);
        $this->ty = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .Jason.Chain33.Kernel.Protobuf.ReceiptLog logs = 3;</code>.
     *
     * @return RepeatedField
     */
    public function getLogs()
    {
        return $this->logs;
    }

    /**
     * Generated from protobuf field <code>repeated .Jason.Chain33.Kernel.Protobuf.ReceiptLog logs = 3;</code>.
     *
     * @param  ReceiptLog[]|RepeatedField  $var
     * @return $this
     */
    public function setLogs($var)
    {
        $arr        = GPBUtil::checkRepeatedField($var, GPBType::MESSAGE,
            ReceiptLog::class);
        $this->logs = $arr;

        return $this;
    }
}
