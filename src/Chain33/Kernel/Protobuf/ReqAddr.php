<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: transaction.proto

namespace Jason\Chain33\Kernel\Protobuf;

use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Jason.Chain33.Kernel.Protobuf.ReqAddr</code>.
 */
class ReqAddr extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string addr = 1;</code>.
     */
    protected $addr = '';
    /**
     *表示取所有/from/to/其他的hash列表.
     *
     * Generated from protobuf field <code>int32 flag = 2;</code>
     */
    protected $flag = 0;
    /**
     * Generated from protobuf field <code>int32 count = 3;</code>.
     */
    protected $count = 0;
    /**
     * Generated from protobuf field <code>int32 direction = 4;</code>.
     */
    protected $direction = 0;
    /**
     * Generated from protobuf field <code>int64 height = 5;</code>.
     */
    protected $height = 0;
    /**
     * Generated from protobuf field <code>int64 index = 6;</code>.
     */
    protected $index = 0;

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                       Optional. Data for populating the Message object.
     *
     *     @var string $addr
     *     @var int $flag
     *          表示取所有/from/to/其他的hash列表
     *     @var int $count
     *     @var int $direction
     *     @var int|string $height
     *     @var int|string $index
     * }
     */
    public function __construct($data = null)
    {
        \GPBMetadata\Transaction::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string addr = 1;</code>.
     *
     * @return string
     */
    public function getAddr()
    {
        return $this->addr;
    }

    /**
     * Generated from protobuf field <code>string addr = 1;</code>.
     *
     * @param  string  $var
     * @return $this
     */
    public function setAddr($var)
    {
        GPBUtil::checkString($var, true);
        $this->addr = $var;

        return $this;
    }

    /**
     *表示取所有/from/to/其他的hash列表.
     *
     * Generated from protobuf field <code>int32 flag = 2;</code>
     *
     * @return int
     */
    public function getFlag()
    {
        return $this->flag;
    }

    /**
     *表示取所有/from/to/其他的hash列表.
     *
     * Generated from protobuf field <code>int32 flag = 2;</code>
     *
     * @param  int  $var
     * @return $this
     */
    public function setFlag($var)
    {
        GPBUtil::checkInt32($var);
        $this->flag = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 count = 3;</code>.
     *
     * @return int
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Generated from protobuf field <code>int32 count = 3;</code>.
     *
     * @param  int  $var
     * @return $this
     */
    public function setCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->count = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 direction = 4;</code>.
     *
     * @return int
     */
    public function getDirection()
    {
        return $this->direction;
    }

    /**
     * Generated from protobuf field <code>int32 direction = 4;</code>.
     *
     * @param  int  $var
     * @return $this
     */
    public function setDirection($var)
    {
        GPBUtil::checkInt32($var);
        $this->direction = $var;

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
     * Generated from protobuf field <code>int64 index = 6;</code>.
     *
     * @return int|string
     */
    public function getIndex()
    {
        return $this->index;
    }

    /**
     * Generated from protobuf field <code>int64 index = 6;</code>.
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
}
