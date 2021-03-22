<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: blockchain.proto

namespace Jason\Chain33\Kernel\Protobuf;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *通过seq区间和title请求平行链的交易
 *
 * Generated from protobuf message <code>Jason.Chain33.Kernel.Protobuf.ReqParaTxByTitle</code>
 */
class ReqParaTxByTitle extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int64 start = 1;</code>
     */
    protected $start = 0;
    /**
     * Generated from protobuf field <code>int64 end = 2;</code>
     */
    protected $end = 0;
    /**
     * Generated from protobuf field <code>string title = 3;</code>
     */
    protected $title = '';
    /**
     * Generated from protobuf field <code>bool isSeq = 4;</code>
     */
    protected $isSeq = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $start
     *     @type int|string $end
     *     @type string $title
     *     @type bool $isSeq
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Blockchain::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int64 start = 1;</code>
     * @return int|string
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Generated from protobuf field <code>int64 start = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setStart($var)
    {
        GPBUtil::checkInt64($var);
        $this->start = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 end = 2;</code>
     * @return int|string
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * Generated from protobuf field <code>int64 end = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setEnd($var)
    {
        GPBUtil::checkInt64($var);
        $this->end = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string title = 3;</code>
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Generated from protobuf field <code>string title = 3;</code>
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
     * Generated from protobuf field <code>bool isSeq = 4;</code>
     * @return bool
     */
    public function getIsSeq()
    {
        return $this->isSeq;
    }

    /**
     * Generated from protobuf field <code>bool isSeq = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsSeq($var)
    {
        GPBUtil::checkBool($var);
        $this->isSeq = $var;

        return $this;
    }

}

