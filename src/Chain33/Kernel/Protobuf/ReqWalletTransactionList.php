<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: wallet.proto

namespace Jason\Chain33\Kernel\Protobuf;

use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\Message;
use GPBMetadata\Wallet;

/**
 *获取钱包交易的详细信息
 *   fromTx : []byte( Sprintf("%018d", height*100000 + index)，
 *              表示从高度 height 中的 index 开始获取交易列表；
 *              第一次传参为空，获取最新的交易。)
 *   count :获取交易列表的个数。
 *   direction :查找方式；0，上一页；1，下一页。
 * Generated from protobuf message <code>Jason.Chain33.Kernel.Protobuf.ReqWalletTransactionList</code>.
 */
class ReqWalletTransactionList extends Message
{
    /**
     * Generated from protobuf field <code>bytes fromTx = 1;</code>.
     */
    protected $fromTx = '';

    /**
     * Generated from protobuf field <code>int32 count = 2;</code>.
     */
    protected $count = 0;

    /**
     * Generated from protobuf field <code>int32 direction = 3;</code>.
     */
    protected $direction = 0;

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                       Optional. Data for populating the Message object.
     *
     * @var string $fromTx
     * @var int $count
     * @var int $direction
     *          }
     */
    public function __construct($data = null)
    {
        Wallet::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bytes fromTx = 1;</code>.
     *
     * @return string
     */
    public function getFromTx()
    {
        return $this->fromTx;
    }

    /**
     * Generated from protobuf field <code>bytes fromTx = 1;</code>.
     *
     * @param  string  $var
     * @return $this
     */
    public function setFromTx($var)
    {
        GPBUtil::checkString($var, false);
        $this->fromTx = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 count = 2;</code>.
     *
     * @return int
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Generated from protobuf field <code>int32 count = 2;</code>.
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
     * Generated from protobuf field <code>int32 direction = 3;</code>.
     *
     * @return int
     */
    public function getDirection()
    {
        return $this->direction;
    }

    /**
     * Generated from protobuf field <code>int32 direction = 3;</code>.
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
}
