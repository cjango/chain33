<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: statistic.proto

namespace Jason\Chain33\Kernel\Protobuf;

use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Jason.Chain33.Kernel.Protobuf.TotalAmount</code>.
 */
class TotalAmount extends \Google\Protobuf\Internal\Message
{
    /**
     * 统计的总数.
     *
     * Generated from protobuf field <code>int64 total = 1;</code>
     */
    protected $total = 0;

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                       Optional. Data for populating the Message object.
     *
     *     @var int|string $total
     *           统计的总数
     * }
     */
    public function __construct($data = null)
    {
        \GPBMetadata\Statistic::initOnce();
        parent::__construct($data);
    }

    /**
     * 统计的总数.
     *
     * Generated from protobuf field <code>int64 total = 1;</code>
     *
     * @return int|string
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * 统计的总数.
     *
     * Generated from protobuf field <code>int64 total = 1;</code>
     *
     * @param  int|string  $var
     * @return $this
     */
    public function setTotal($var)
    {
        GPBUtil::checkInt64($var);
        $this->total = $var;

        return $this;
    }
}
