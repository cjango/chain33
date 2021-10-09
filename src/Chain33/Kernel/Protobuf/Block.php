<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: blockchain.proto

namespace Jason\Chain33\Kernel\Protobuf;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\Message;
use GPBMetadata\Blockchain;

/**
 *  参考Header解释
 * mainHash 平行链上使用的字段，代表这个区块的主链hash.
 * Generated from protobuf message <code>Jason.Chain33.Kernel.Protobuf.Block</code>
 */
class Block extends Message
{
    /**
     * Generated from protobuf field <code>int64 version = 1;</code>.
     */
    protected $version = 0;

    /**
     * Generated from protobuf field <code>bytes parentHash = 2;</code>.
     */
    protected $parentHash = '';

    /**
     * Generated from protobuf field <code>bytes txHash = 3;</code>.
     */
    protected $txHash = '';

    /**
     * Generated from protobuf field <code>bytes stateHash = 4;</code>.
     */
    protected $stateHash = '';

    /**
     * Generated from protobuf field <code>int64 height = 5;</code>.
     */
    protected $height = 0;

    /**
     * Generated from protobuf field <code>int64 blockTime = 6;</code>.
     */
    protected $blockTime = 0;

    /**
     * Generated from protobuf field <code>uint32 difficulty = 11;</code>.
     */
    protected $difficulty = 0;

    /**
     * Generated from protobuf field <code>bytes mainHash = 12;</code>.
     */
    protected $mainHash = '';

    /**
     * Generated from protobuf field <code>int64 mainHeight = 13;</code>.
     */
    protected $mainHeight = 0;

    /**
     * Generated from protobuf field <code>.Jason.Chain33.Kernel.Protobuf.Signature signature = 8;</code>.
     */
    protected $signature = null;

    /**
     * Generated from protobuf field <code>repeated .Jason.Chain33.Kernel.Protobuf.Transaction txs = 7;</code>.
     */
    private $txs;

    /**
     * Constructor.
     *
     * @param  array                                                                             $data  {
     *                                                                                                  Optional. Data for populating the Message object.
     * @var int|string                                                                           $version
     * @var string                                                                               $parentHash
     * @var string                                                                               $txHash
     * @var string                                                                               $stateHash
     * @var int|string                                                                           $height
     * @var int|string                                                                           $blockTime
     * @var int                                                                                  $difficulty
     * @var string                                                                               $mainHash
     * @var int|string                                                                           $mainHeight
     * @var \Jason\Chain33\Kernel\Protobuf\Signature                                             $signature
     * @var \Jason\Chain33\Kernel\Protobuf\Transaction[]|\Google\Protobuf\Internal\RepeatedField $txs
     *                                                                                                  }
     */
    public function __construct($data = null)
    {
        Blockchain::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int64 version = 1;</code>.
     *
     * @return int|string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Generated from protobuf field <code>int64 version = 1;</code>.
     *
     * @param  int|string  $var
     * @return $this
     */
    public function setVersion($var)
    {
        GPBUtil::checkInt64($var);
        $this->version = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes parentHash = 2;</code>.
     *
     * @return string
     */
    public function getParentHash()
    {
        return $this->parentHash;
    }

    /**
     * Generated from protobuf field <code>bytes parentHash = 2;</code>.
     *
     * @param  string  $var
     * @return $this
     */
    public function setParentHash($var)
    {
        GPBUtil::checkString($var, false);
        $this->parentHash = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes txHash = 3;</code>.
     *
     * @return string
     */
    public function getTxHash()
    {
        return $this->txHash;
    }

    /**
     * Generated from protobuf field <code>bytes txHash = 3;</code>.
     *
     * @param  string  $var
     * @return $this
     */
    public function setTxHash($var)
    {
        GPBUtil::checkString($var, false);
        $this->txHash = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes stateHash = 4;</code>.
     *
     * @return string
     */
    public function getStateHash()
    {
        return $this->stateHash;
    }

    /**
     * Generated from protobuf field <code>bytes stateHash = 4;</code>.
     *
     * @param  string  $var
     * @return $this
     */
    public function setStateHash($var)
    {
        GPBUtil::checkString($var, false);
        $this->stateHash = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 height = 5;</code>.
     *
     * @return int|string
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Generated from protobuf field <code>int64 height = 5;</code>.
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
     * Generated from protobuf field <code>int64 blockTime = 6;</code>.
     *
     * @return int|string
     */
    public function getBlockTime()
    {
        return $this->blockTime;
    }

    /**
     * Generated from protobuf field <code>int64 blockTime = 6;</code>.
     *
     * @param  int|string  $var
     * @return $this
     */
    public function setBlockTime($var)
    {
        GPBUtil::checkInt64($var);
        $this->blockTime = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 difficulty = 11;</code>.
     *
     * @return int
     */
    public function getDifficulty()
    {
        return $this->difficulty;
    }

    /**
     * Generated from protobuf field <code>uint32 difficulty = 11;</code>.
     *
     * @param  int  $var
     * @return $this
     */
    public function setDifficulty($var)
    {
        GPBUtil::checkUint32($var);
        $this->difficulty = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes mainHash = 12;</code>.
     *
     * @return string
     */
    public function getMainHash()
    {
        return $this->mainHash;
    }

    /**
     * Generated from protobuf field <code>bytes mainHash = 12;</code>.
     *
     * @param  string  $var
     * @return $this
     */
    public function setMainHash($var)
    {
        GPBUtil::checkString($var, false);
        $this->mainHash = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 mainHeight = 13;</code>.
     *
     * @return int|string
     */
    public function getMainHeight()
    {
        return $this->mainHeight;
    }

    /**
     * Generated from protobuf field <code>int64 mainHeight = 13;</code>.
     *
     * @param  int|string  $var
     * @return $this
     */
    public function setMainHeight($var)
    {
        GPBUtil::checkInt64($var);
        $this->mainHeight = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Jason.Chain33.Kernel.Protobuf.Signature signature = 8;</code>.
     *
     * @return \Jason\Chain33\Kernel\Protobuf\Signature|null
     */
    public function getSignature()
    {
        return isset($this->signature) ? $this->signature : null;
    }

    /**
     * Generated from protobuf field <code>.Jason.Chain33.Kernel.Protobuf.Signature signature = 8;</code>.
     *
     * @param  \Jason\Chain33\Kernel\Protobuf\Signature  $var
     * @return $this
     */
    public function setSignature($var)
    {
        GPBUtil::checkMessage($var, Signature::class);
        $this->signature = $var;

        return $this;
    }

    public function hasSignature()
    {
        return isset($this->signature);
    }

    public function clearSignature()
    {
        unset($this->signature);
    }

    /**
     * Generated from protobuf field <code>repeated .Jason.Chain33.Kernel.Protobuf.Transaction txs = 7;</code>.
     *
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTxs()
    {
        return $this->txs;
    }

    /**
     * Generated from protobuf field <code>repeated .Jason.Chain33.Kernel.Protobuf.Transaction txs = 7;</code>.
     *
     * @param  \Jason\Chain33\Kernel\Protobuf\Transaction[]|\Google\Protobuf\Internal\RepeatedField  $var
     * @return $this
     */
    public function setTxs($var)
    {
        $arr       = GPBUtil::checkRepeatedField($var, GPBType::MESSAGE,
            Transaction::class);
        $this->txs = $arr;

        return $this;
    }
}
