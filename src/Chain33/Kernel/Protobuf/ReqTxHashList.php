<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: transaction.proto

namespace Jason\Chain33\Kernel\Protobuf;

use Google\Protobuf\Internal\GPBUtil;

/**
 *通过交易hash获取交易列表，需要区分是短hash还是全hash值
 *
 * Generated from protobuf message <code>Jason.Chain33.Kernel.Protobuf.ReqTxHashList</code>
 */
class ReqTxHashList extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated string hashes = 1;</code>.
     */
    private $hashes;
    /**
     * Generated from protobuf field <code>bool isShortHash = 2;</code>.
     */
    protected $isShortHash = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *                    Optional. Data for populating the Message object.
     *
     *     @var string[]|\Google\Protobuf\Internal\RepeatedField $hashes
     *     @var bool $isShortHash
     * }
     */
    public function __construct($data = null)
    {
        \GPBMetadata\Transaction::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated string hashes = 1;</code>.
     *
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getHashes()
    {
        return $this->hashes;
    }

    /**
     * Generated from protobuf field <code>repeated string hashes = 1;</code>.
     *
     * @param  string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setHashes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->hashes = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool isShortHash = 2;</code>.
     *
     * @return bool
     */
    public function getIsShortHash()
    {
        return $this->isShortHash;
    }

    /**
     * Generated from protobuf field <code>bool isShortHash = 2;</code>.
     *
     * @param  bool  $var
     * @return $this
     */
    public function setIsShortHash($var)
    {
        GPBUtil::checkBool($var);
        $this->isShortHash = $var;

        return $this;
    }
}
