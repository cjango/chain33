<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: transaction.proto

namespace Jason\Chain33\Kernel\Protobuf;

use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\Message;

/**
 * Generated from protobuf message <code>Jason.Chain33.Kernel.Protobuf.ReceiptLog</code>.
 */
class ReceiptLog extends Message
{
    /**
     * Generated from protobuf field <code>int32 ty = 1;</code>.
     */
    protected $ty = 0;

    /**
     * Generated from protobuf field <code>bytes log = 2;</code>.
     */
    protected $log = '';

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                       Optional. Data for populating the Message object.
     *
     * @var int $ty
     * @var string $log
     *             }
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
     * Generated from protobuf field <code>bytes log = 2;</code>.
     *
     * @return string
     */
    public function getLog()
    {
        return $this->log;
    }

    /**
     * Generated from protobuf field <code>bytes log = 2;</code>.
     *
     * @param  string  $var
     * @return $this
     */
    public function setLog($var)
    {
        GPBUtil::checkString($var, false);
        $this->log = $var;

        return $this;
    }
}
