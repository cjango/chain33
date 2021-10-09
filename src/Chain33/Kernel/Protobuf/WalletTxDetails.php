<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: wallet.proto

namespace Jason\Chain33\Kernel\Protobuf;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\Message;
use Google\Protobuf\Internal\RepeatedField;
use GPBMetadata\Wallet;

/**
 * Generated from protobuf message <code>Jason.Chain33.Kernel.Protobuf.WalletTxDetails</code>.
 */
class WalletTxDetails extends Message
{
    /**
     * Generated from protobuf field <code>repeated .Jason.Chain33.Kernel.Protobuf.WalletTxDetail txDetails = 1;</code>.
     */
    private $txDetails;

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                                                                                                     Optional. Data for populating the Message object.
     * @var WalletTxDetail[]|RepeatedField $txDetails
     *                                                                                                     }
     */
    public function __construct($data = null)
    {
        Wallet::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .Jason.Chain33.Kernel.Protobuf.WalletTxDetail txDetails = 1;</code>.
     *
     * @return RepeatedField
     */
    public function getTxDetails()
    {
        return $this->txDetails;
    }

    /**
     * Generated from protobuf field <code>repeated .Jason.Chain33.Kernel.Protobuf.WalletTxDetail txDetails = 1;</code>.
     *
     * @param  WalletTxDetail[]|RepeatedField  $var
     * @return $this
     */
    public function setTxDetails($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, GPBType::MESSAGE,
            WalletTxDetail::class);
        $this->txDetails = $arr;

        return $this;
    }
}
