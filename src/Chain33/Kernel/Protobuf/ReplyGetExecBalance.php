<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: statistic.proto

namespace Jason\Chain33\Kernel\Protobuf;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *查询symbol在合约中的代币总额应答
 *
 * Generated from protobuf message <code>Jason.Chain33.Kernel.Protobuf.ReplyGetExecBalance</code>
 */
class ReplyGetExecBalance extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int64 amount = 1;</code>
     */
    protected $amount = 0;
    /**
     * Generated from protobuf field <code>int64 amountFrozen = 2;</code>
     */
    protected $amountFrozen = 0;
    /**
     * Generated from protobuf field <code>int64 amountActive = 3;</code>
     */
    protected $amountActive = 0;
    /**
     * Generated from protobuf field <code>bytes nextKey = 4;</code>
     */
    protected $nextKey = '';
    /**
     * Generated from protobuf field <code>repeated .Jason.Chain33.Kernel.Protobuf.ExecBalanceItem items = 5;</code>
     */
    private $items;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $amount
     *     @type int|string $amountFrozen
     *     @type int|string $amountActive
     *     @type string $nextKey
     *     @type \Jason\Chain33\Kernel\Protobuf\ExecBalanceItem[]|\Google\Protobuf\Internal\RepeatedField $items
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Statistic::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int64 amount = 1;</code>
     * @return int|string
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Generated from protobuf field <code>int64 amount = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setAmount($var)
    {
        GPBUtil::checkInt64($var);
        $this->amount = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 amountFrozen = 2;</code>
     * @return int|string
     */
    public function getAmountFrozen()
    {
        return $this->amountFrozen;
    }

    /**
     * Generated from protobuf field <code>int64 amountFrozen = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setAmountFrozen($var)
    {
        GPBUtil::checkInt64($var);
        $this->amountFrozen = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 amountActive = 3;</code>
     * @return int|string
     */
    public function getAmountActive()
    {
        return $this->amountActive;
    }

    /**
     * Generated from protobuf field <code>int64 amountActive = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setAmountActive($var)
    {
        GPBUtil::checkInt64($var);
        $this->amountActive = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes nextKey = 4;</code>
     * @return string
     */
    public function getNextKey()
    {
        return $this->nextKey;
    }

    /**
     * Generated from protobuf field <code>bytes nextKey = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setNextKey($var)
    {
        GPBUtil::checkString($var, False);
        $this->nextKey = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .Jason.Chain33.Kernel.Protobuf.ExecBalanceItem items = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * Generated from protobuf field <code>repeated .Jason.Chain33.Kernel.Protobuf.ExecBalanceItem items = 5;</code>
     * @param \Jason\Chain33\Kernel\Protobuf\ExecBalanceItem[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setItems($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Jason\Chain33\Kernel\Protobuf\ExecBalanceItem::class);
        $this->items = $arr;

        return $this;
    }

}

