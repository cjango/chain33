<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: blockchain.proto

namespace Jason\Chain33\Kernel\Protobuf;

use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\Message;
use GPBMetadata\Blockchain;

/**
 *  区块追赶主链状态，用于判断本节点区块是否已经同步好.
 * Generated from protobuf message <code>Jason.Chain33.Kernel.Protobuf.IsCaughtUp</code>.
 */
class IsCaughtUp extends Message
{
    /**
     * Generated from protobuf field <code>bool Iscaughtup = 1;</code>.
     */
    protected $Iscaughtup = false;

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                       Optional. Data for populating the Message object.
     *
     * @var bool $Iscaughtup
     *           }
     */
    public function __construct($data = null)
    {
        Blockchain::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bool Iscaughtup = 1;</code>.
     *
     * @return bool
     */
    public function getIscaughtup()
    {
        return $this->Iscaughtup;
    }

    /**
     * Generated from protobuf field <code>bool Iscaughtup = 1;</code>.
     *
     * @param  bool  $var
     * @return $this
     */
    public function setIscaughtup($var)
    {
        GPBUtil::checkBool($var);
        $this->Iscaughtup = $var;

        return $this;
    }
}
