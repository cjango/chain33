<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: transaction.proto

namespace Jason\Chain33\Kernel\Protobuf;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\Message;
use Google\Protobuf\Internal\RepeatedField;

/**
 * ty = 0 -> error Receipt
 * ty = 1 -> CutFee //cut fee ,bug exec not ok
 * ty = 2 -> exec ok.
 * Generated from protobuf message <code>Jason.Chain33.Kernel.Protobuf.Receipt</code>
 */
class Receipt extends Message
{
    /**
     * Generated from protobuf field <code>int32 ty = 1;</code>.
     */
    protected $ty = 0;

    /**
     * Generated from protobuf field <code>repeated .Jason.Chain33.Kernel.Protobuf.KeyValue KV = 2;</code>.
     */
    private $KV;

    /**
     * Generated from protobuf field <code>repeated .Jason.Chain33.Kernel.Protobuf.ReceiptLog logs = 3;</code>.
     */
    private $logs;

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                                                                                                 Optional. Data for populating the Message object.
     * @var int $ty
     * @var KeyValue[]|RepeatedField $KV
     * @var ReceiptLog[]|RepeatedField $logs
     *                                                                                                 }
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
     * Generated from protobuf field <code>repeated .Jason.Chain33.Kernel.Protobuf.KeyValue KV = 2;</code>.
     *
     * @return RepeatedField
     */
    public function getKV()
    {
        return $this->KV;
    }

    /**
     * Generated from protobuf field <code>repeated .Jason.Chain33.Kernel.Protobuf.KeyValue KV = 2;</code>.
     *
     * @param  KeyValue[]|RepeatedField  $var
     * @return $this
     */
    public function setKV($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, GPBType::MESSAGE,
            KeyValue::class);
        $this->KV = $arr;

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
        $arr = GPBUtil::checkRepeatedField($var, GPBType::MESSAGE,
            ReceiptLog::class);
        $this->logs = $arr;

        return $this;
    }
}
