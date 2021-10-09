<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: blockchain.proto

namespace Jason\Chain33\Kernel\Protobuf;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\MapField;
use Google\Protobuf\Internal\Message;
use GPBMetadata\Blockchain;

/**
 * Generated from protobuf message <code>Jason.Chain33.Kernel.Protobuf.PushSubscribeReq</code>.
 */
class PushSubscribeReq extends Message
{
    /**
     * Generated from protobuf field <code>string name = 1;</code>.
     */
    protected $name = '';

    /**
     * Generated from protobuf field <code>string URL = 2;</code>.
     */
    protected $URL = '';

    /**
     * Generated from protobuf field <code>string encode = 3;</code>.
     */
    protected $encode = '';

    /**
     * Generated from protobuf field <code>int64 lastSequence = 4;</code>.
     */
    protected $lastSequence = 0;

    /**
     * Generated from protobuf field <code>int64 lastHeight = 5;</code>.
     */
    protected $lastHeight = 0;

    /**
     * Generated from protobuf field <code>string lastBlockHash = 6;</code>.
     */
    protected $lastBlockHash = '';

    /**
     * 0:代表区块；1:代表区块头信息；2：代表交易回执.
     * Generated from protobuf field <code>int32 type = 7;</code>.
     */
    protected $type = 0;

    /**
     *允许订阅多个类型的交易回执.
     * Generated from protobuf field <code>map<string, bool> contract = 8;</code>.
     */
    private $contract;

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                       Optional. Data for populating the Message object.
     *
     * @var string $name
     * @var string $URL
     * @var string $encode
     * @var int|string $lastSequence
     * @var int|string $lastHeight
     * @var string $lastBlockHash
     * @var int $type
     *          0:代表区块；1:代表区块头信息；2：代表交易回执
     * @var array|MapField $contract
     *                     允许订阅多个类型的交易回执
     *                     }
     */
    public function __construct($data = null)
    {
        Blockchain::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string name = 1;</code>.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Generated from protobuf field <code>string name = 1;</code>.
     *
     * @param  string  $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, true);
        $this->name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string URL = 2;</code>.
     *
     * @return string
     */
    public function getURL()
    {
        return $this->URL;
    }

    /**
     * Generated from protobuf field <code>string URL = 2;</code>.
     *
     * @param  string  $var
     * @return $this
     */
    public function setURL($var)
    {
        GPBUtil::checkString($var, true);
        $this->URL = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string encode = 3;</code>.
     *
     * @return string
     */
    public function getEncode()
    {
        return $this->encode;
    }

    /**
     * Generated from protobuf field <code>string encode = 3;</code>.
     *
     * @param  string  $var
     * @return $this
     */
    public function setEncode($var)
    {
        GPBUtil::checkString($var, true);
        $this->encode = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 lastSequence = 4;</code>.
     *
     * @return int|string
     */
    public function getLastSequence()
    {
        return $this->lastSequence;
    }

    /**
     * Generated from protobuf field <code>int64 lastSequence = 4;</code>.
     *
     * @param  int|string  $var
     * @return $this
     */
    public function setLastSequence($var)
    {
        GPBUtil::checkInt64($var);
        $this->lastSequence = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 lastHeight = 5;</code>.
     *
     * @return int|string
     */
    public function getLastHeight()
    {
        return $this->lastHeight;
    }

    /**
     * Generated from protobuf field <code>int64 lastHeight = 5;</code>.
     *
     * @param  int|string  $var
     * @return $this
     */
    public function setLastHeight($var)
    {
        GPBUtil::checkInt64($var);
        $this->lastHeight = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string lastBlockHash = 6;</code>.
     *
     * @return string
     */
    public function getLastBlockHash()
    {
        return $this->lastBlockHash;
    }

    /**
     * Generated from protobuf field <code>string lastBlockHash = 6;</code>.
     *
     * @param  string  $var
     * @return $this
     */
    public function setLastBlockHash($var)
    {
        GPBUtil::checkString($var, true);
        $this->lastBlockHash = $var;

        return $this;
    }

    /**
     * 0:代表区块；1:代表区块头信息；2：代表交易回执.
     * Generated from protobuf field <code>int32 type = 7;</code>.
     *
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * 0:代表区块；1:代表区块头信息；2：代表交易回执.
     * Generated from protobuf field <code>int32 type = 7;</code>.
     *
     * @param  int  $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkInt32($var);
        $this->type = $var;

        return $this;
    }

    /**
     *允许订阅多个类型的交易回执.
     * Generated from protobuf field <code>map<string, bool> contract = 8;</code>.
     *
     * @return MapField
     */
    public function getContract()
    {
        return $this->contract;
    }

    /**
     *允许订阅多个类型的交易回执.
     * Generated from protobuf field <code>map<string, bool> contract = 8;</code>.
     *
     * @param  array|MapField  $var
     * @return $this
     */
    public function setContract($var)
    {
        $arr = GPBUtil::checkMapField($var, GPBType::STRING,
            GPBType::BOOL);
        $this->contract = $arr;

        return $this;
    }
}
