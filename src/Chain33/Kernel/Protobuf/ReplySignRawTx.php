<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: wallet.proto

namespace Jason\Chain33\Kernel\Protobuf;

use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Jason.Chain33.Kernel.Protobuf.ReplySignRawTx</code>.
 */
class ReplySignRawTx extends \Google\Protobuf\Internal\Message
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
     *     @var string $txHex
     * }
     */
    public function __construct($data = null)
    {
        \GPBMetadata\Wallet::initOnce();
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
     * @return $this
     */
    public function setTxHex($var)
    {
        GPBUtil::checkString($var, true);
        $this->txHex = $var;

        return $this;
    }
}
