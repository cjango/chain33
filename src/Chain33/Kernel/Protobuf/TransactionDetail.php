<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: transaction.proto

namespace Jason\Chain33\Kernel\Protobuf;

use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Jason.Chain33.Kernel.Protobuf.TransactionDetail</code>.
 */
class TransactionDetail extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.Jason.Chain33.Kernel.Protobuf.Transaction tx = 1;</code>.
     */
    protected $tx = null;
    /**
     * Generated from protobuf field <code>.Jason.Chain33.Kernel.Protobuf.ReceiptData receipt = 2;</code>.
     */
    protected $receipt = null;
    /**
     * Generated from protobuf field <code>repeated bytes proofs = 3;</code>.
     */
    private $proofs;
    /**
     * Generated from protobuf field <code>int64 height = 4;</code>.
     */
    protected $height = 0;
    /**
     * Generated from protobuf field <code>int64 index = 5;</code>.
     */
    protected $index = 0;
    /**
     * Generated from protobuf field <code>int64 blocktime = 6;</code>.
     */
    protected $blocktime = 0;
    /**
     * Generated from protobuf field <code>int64 amount = 7;</code>.
     */
    protected $amount = 0;
    /**
     * Generated from protobuf field <code>string fromaddr = 8;</code>.
     */
    protected $fromaddr = '';
    /**
     * Generated from protobuf field <code>string actionName = 9;</code>.
     */
    protected $actionName = '';
    /**
     * Generated from protobuf field <code>repeated .Jason.Chain33.Kernel.Protobuf.Asset assets = 10;</code>.
     */
    private $assets;
    /**
     * Generated from protobuf field <code>repeated .Jason.Chain33.Kernel.Protobuf.TxProof txProofs = 11;</code>.
     */
    private $txProofs;
    /**
     * Generated from protobuf field <code>bytes fullHash = 12;</code>.
     */
    protected $fullHash = '';

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                       Optional. Data for populating the Message object.
     *
     *     @var \Jason\Chain33\Kernel\Protobuf\Transaction $tx
     *     @var \Jason\Chain33\Kernel\Protobuf\ReceiptData $receipt
     *     @var string[]|\Google\Protobuf\Internal\RepeatedField $proofs
     *     @var int|string $height
     *     @var int|string $index
     *     @var int|string $blocktime
     *     @var int|string $amount
     *     @var string $fromaddr
     *     @var string $actionName
     *     @var \Jason\Chain33\Kernel\Protobuf\Asset[]|\Google\Protobuf\Internal\RepeatedField $assets
     *     @var \Jason\Chain33\Kernel\Protobuf\TxProof[]|\Google\Protobuf\Internal\RepeatedField $txProofs
     *     @var string $fullHash
     * }
     */
    public function __construct($data = null)
    {
        \GPBMetadata\Transaction::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.Jason.Chain33.Kernel.Protobuf.Transaction tx = 1;</code>.
     *
     * @return \Jason\Chain33\Kernel\Protobuf\Transaction|null
     */
    public function getTx()
    {
        return isset($this->tx) ? $this->tx : null;
    }

    public function hasTx()
    {
        return isset($this->tx);
    }

    public function clearTx()
    {
        unset($this->tx);
    }

    /**
     * Generated from protobuf field <code>.Jason.Chain33.Kernel.Protobuf.Transaction tx = 1;</code>.
     *
     * @param  \Jason\Chain33\Kernel\Protobuf\Transaction  $var
     * @return $this
     */
    public function setTx($var)
    {
        GPBUtil::checkMessage($var, \Jason\Chain33\Kernel\Protobuf\Transaction::class);
        $this->tx = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Jason.Chain33.Kernel.Protobuf.ReceiptData receipt = 2;</code>.
     *
     * @return \Jason\Chain33\Kernel\Protobuf\ReceiptData|null
     */
    public function getReceipt()
    {
        return isset($this->receipt) ? $this->receipt : null;
    }

    public function hasReceipt()
    {
        return isset($this->receipt);
    }

    public function clearReceipt()
    {
        unset($this->receipt);
    }

    /**
     * Generated from protobuf field <code>.Jason.Chain33.Kernel.Protobuf.ReceiptData receipt = 2;</code>.
     *
     * @param  \Jason\Chain33\Kernel\Protobuf\ReceiptData  $var
     * @return $this
     */
    public function setReceipt($var)
    {
        GPBUtil::checkMessage($var, \Jason\Chain33\Kernel\Protobuf\ReceiptData::class);
        $this->receipt = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated bytes proofs = 3;</code>.
     *
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getProofs()
    {
        return $this->proofs;
    }

    /**
     * Generated from protobuf field <code>repeated bytes proofs = 3;</code>.
     *
     * @param  string[]|\Google\Protobuf\Internal\RepeatedField  $var
     * @return $this
     */
    public function setProofs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::BYTES);
        $this->proofs = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 height = 4;</code>.
     *
     * @return int|string
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Generated from protobuf field <code>int64 height = 4;</code>.
     *
     * @param  int|string  $var
     * @return $this
     */
    public function setHeight($var)
    {
        GPBUtil::checkInt64($var);
        $this->height = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 index = 5;</code>.
     *
     * @return int|string
     */
    public function getIndex()
    {
        return $this->index;
    }

    /**
     * Generated from protobuf field <code>int64 index = 5;</code>.
     *
     * @param  int|string  $var
     * @return $this
     */
    public function setIndex($var)
    {
        GPBUtil::checkInt64($var);
        $this->index = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 blocktime = 6;</code>.
     *
     * @return int|string
     */
    public function getBlocktime()
    {
        return $this->blocktime;
    }

    /**
     * Generated from protobuf field <code>int64 blocktime = 6;</code>.
     *
     * @param  int|string  $var
     * @return $this
     */
    public function setBlocktime($var)
    {
        GPBUtil::checkInt64($var);
        $this->blocktime = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 amount = 7;</code>.
     *
     * @return int|string
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Generated from protobuf field <code>int64 amount = 7;</code>.
     *
     * @param  int|string  $var
     * @return $this
     */
    public function setAmount($var)
    {
        GPBUtil::checkInt64($var);
        $this->amount = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string fromaddr = 8;</code>.
     *
     * @return string
     */
    public function getFromaddr()
    {
        return $this->fromaddr;
    }

    /**
     * Generated from protobuf field <code>string fromaddr = 8;</code>.
     *
     * @param  string  $var
     * @return $this
     */
    public function setFromaddr($var)
    {
        GPBUtil::checkString($var, true);
        $this->fromaddr = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string actionName = 9;</code>.
     *
     * @return string
     */
    public function getActionName()
    {
        return $this->actionName;
    }

    /**
     * Generated from protobuf field <code>string actionName = 9;</code>.
     *
     * @param  string  $var
     * @return $this
     */
    public function setActionName($var)
    {
        GPBUtil::checkString($var, true);
        $this->actionName = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .Jason.Chain33.Kernel.Protobuf.Asset assets = 10;</code>.
     *
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAssets()
    {
        return $this->assets;
    }

    /**
     * Generated from protobuf field <code>repeated .Jason.Chain33.Kernel.Protobuf.Asset assets = 10;</code>.
     *
     * @param  \Jason\Chain33\Kernel\Protobuf\Asset[]|\Google\Protobuf\Internal\RepeatedField  $var
     * @return $this
     */
    public function setAssets($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Jason\Chain33\Kernel\Protobuf\Asset::class);
        $this->assets = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .Jason.Chain33.Kernel.Protobuf.TxProof txProofs = 11;</code>.
     *
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTxProofs()
    {
        return $this->txProofs;
    }

    /**
     * Generated from protobuf field <code>repeated .Jason.Chain33.Kernel.Protobuf.TxProof txProofs = 11;</code>.
     *
     * @param  \Jason\Chain33\Kernel\Protobuf\TxProof[]|\Google\Protobuf\Internal\RepeatedField  $var
     * @return $this
     */
    public function setTxProofs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Jason\Chain33\Kernel\Protobuf\TxProof::class);
        $this->txProofs = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes fullHash = 12;</code>.
     *
     * @return string
     */
    public function getFullHash()
    {
        return $this->fullHash;
    }

    /**
     * Generated from protobuf field <code>bytes fullHash = 12;</code>.
     *
     * @param  string  $var
     * @return $this
     */
    public function setFullHash($var)
    {
        GPBUtil::checkString($var, false);
        $this->fullHash = $var;

        return $this;
    }
}
