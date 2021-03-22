<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: blockchain.proto

namespace Jason\Chain33\Kernel\Protobuf;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *记录平行链第一笔交易的index,以及平行链的roothash
 * title:子链名字，主链的默认是main
 * startIndex:子链第一笔交易的索引
 * childHash:子链的根hash
 * txCount:子链交易的数量
 *
 * Generated from protobuf message <code>Jason.Chain33.Kernel.Protobuf.ChildChain</code>
 */
class ChildChain extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string title = 1;</code>
     */
    protected $title = '';
    /**
     * Generated from protobuf field <code>int32 startIndex = 2;</code>
     */
    protected $startIndex = 0;
    /**
     * Generated from protobuf field <code>bytes childHash = 3;</code>
     */
    protected $childHash = '';
    /**
     * Generated from protobuf field <code>int32 txCount = 4;</code>
     */
    protected $txCount = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $title
     *     @type int $startIndex
     *     @type string $childHash
     *     @type int $txCount
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Blockchain::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string title = 1;</code>
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Generated from protobuf field <code>string title = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setTitle($var)
    {
        GPBUtil::checkString($var, True);
        $this->title = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 startIndex = 2;</code>
     * @return int
     */
    public function getStartIndex()
    {
        return $this->startIndex;
    }

    /**
     * Generated from protobuf field <code>int32 startIndex = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setStartIndex($var)
    {
        GPBUtil::checkInt32($var);
        $this->startIndex = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes childHash = 3;</code>
     * @return string
     */
    public function getChildHash()
    {
        return $this->childHash;
    }

    /**
     * Generated from protobuf field <code>bytes childHash = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setChildHash($var)
    {
        GPBUtil::checkString($var, False);
        $this->childHash = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 txCount = 4;</code>
     * @return int
     */
    public function getTxCount()
    {
        return $this->txCount;
    }

    /**
     * Generated from protobuf field <code>int32 txCount = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setTxCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->txCount = $var;

        return $this;
    }

}
