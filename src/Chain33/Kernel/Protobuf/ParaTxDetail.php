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
 * type:平行链交易所在区块add/del操作，方便平行链回滚
 * header:平行链交易所在区块头信息
 * txDetails:本区块中指定title平行链的所有交易
 * proofs:对应平行链子roothash的存在证明路径
 * childHash:此平行链交易的子roothash
 * index:对应平行链子roothash在整个区块中的索引.
 * Generated from protobuf message <code>Jason.Chain33.Kernel.Protobuf.ParaTxDetail</code>.
 */
class ParaTxDetail extends Message
{
    /**
     * Generated from protobuf field <code>int64 type = 1;</code>.
     */
    protected $type = 0;

    /**
     * Generated from protobuf field <code>.Jason.Chain33.Kernel.Protobuf.Header header = 2;</code>.
     */
    protected $header = null;

    /**
     * Generated from protobuf field <code>bytes childHash = 4;</code>.
     */
    protected $childHash = '';

    /**
     * Generated from protobuf field <code>uint32 index = 5;</code>.
     */
    protected $index = 0;

    /**
     * Generated from protobuf field <code>repeated .Jason.Chain33.Kernel.Protobuf.TxDetail txDetails = 3;</code>.
     */
    private $txDetails;

    /**
     * Generated from protobuf field <code>repeated bytes proofs = 6;</code>.
     */
    private $proofs;

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                       Optional. Data for populating the Message object.
     *
     * @var int|string $type
     * @var Header $header
     * @var TxDetail[]|RepeatedField $txDetails
     * @var string $childHash
     * @var int $index
     * @var string[]|RepeatedField $proofs
     *                             }
     */
    public function __construct($data = null)
    {
        Blockchain::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int64 type = 1;</code>.
     *
     * @return int|string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Generated from protobuf field <code>int64 type = 1;</code>.
     *
     * @param  int|string  $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkInt64($var);
        $this->type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Jason.Chain33.Kernel.Protobuf.Header header = 2;</code>.
     *
     * @return Header|null
     */
    public function getHeader()
    {
        return isset($this->header) ? $this->header : null;
    }

    /**
     * Generated from protobuf field <code>.Jason.Chain33.Kernel.Protobuf.Header header = 2;</code>.
     *
     * @param  Header  $var
     * @return $this
     */
    public function setHeader($var)
    {
        GPBUtil::checkMessage($var, Header::class);
        $this->header = $var;

        return $this;
    }

    public function hasHeader()
    {
        return isset($this->header);
    }

    public function clearHeader()
    {
        unset($this->header);
    }

    /**
     * Generated from protobuf field <code>repeated .Jason.Chain33.Kernel.Protobuf.TxDetail txDetails = 3;</code>.
     *
     * @return RepeatedField
     */
    public function getTxDetails()
    {
        return $this->txDetails;
    }

    /**
     * Generated from protobuf field <code>repeated .Jason.Chain33.Kernel.Protobuf.TxDetail txDetails = 3;</code>.
     *
     * @param  TxDetail[]|RepeatedField  $var
     * @return $this
     */
    public function setTxDetails($var)
    {
        $arr             = GPBUtil::checkRepeatedField($var, GPBType::MESSAGE,
            TxDetail::class);
        $this->txDetails = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes childHash = 4;</code>.
     *
     * @return string
     */
    public function getChildHash()
    {
        return $this->childHash;
    }

    /**
     * Generated from protobuf field <code>bytes childHash = 4;</code>.
     *
     * @param  string  $var
     * @return $this
     */
    public function setChildHash($var)
    {
        GPBUtil::checkString($var, false);
        $this->childHash = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 index = 5;</code>.
     *
     * @return int
     */
    public function getIndex()
    {
        return $this->index;
    }

    /**
     * Generated from protobuf field <code>uint32 index = 5;</code>.
     *
     * @param  int  $var
     * @return $this
     */
    public function setIndex($var)
    {
        GPBUtil::checkUint32($var);
        $this->index = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated bytes proofs = 6;</code>.
     *
     * @return RepeatedField
     */
    public function getProofs()
    {
        return $this->proofs;
    }

    /**
     * Generated from protobuf field <code>repeated bytes proofs = 6;</code>.
     *
     * @param  string[]|RepeatedField  $var
     * @return $this
     */
    public function setProofs($var)
    {
        $arr          = GPBUtil::checkRepeatedField($var, GPBType::BYTES);
        $this->proofs = $arr;

        return $this;
    }
}
