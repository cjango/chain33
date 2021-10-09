<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: transaction.proto

namespace Jason\Chain33\Kernel\Protobuf;

use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\Message;

/**
 * Generated from protobuf message <code>Jason.Chain33.Kernel.Protobuf.ReqDecodeRawTransaction</code>.
 */
class ReqDecodeRawTransaction extends Message
{
    /**
     * Generated from protobuf field <code>string txHex = 1;</code>.
     */
    protected $txHex = '';

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                       Optional. Data for populating the Message object.
     *
     * @var string $txHex
     *                       }
     */
    public function __construct($data = null)
    {
        \GPBMetadata\Transaction::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string txHex = 1;</code>.
     *
     * @return string
     */
    public function getTxHex()
    {
        return $this->txHex;
    }

    /**
     * Generated from protobuf field <code>string txHex = 1;</code>.
     *
     * @param  string  $var
     *
     * @return $this
     */
    public function setTxHex($var)
    {
        GPBUtil::checkString($var, true);
        $this->txHex = $var;

        return $this;
    }
}
