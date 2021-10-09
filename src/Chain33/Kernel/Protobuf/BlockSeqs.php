<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: blockchain.proto

namespace Jason\Chain33\Kernel\Protobuf;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\Message;
use GPBMetadata\Blockchain;

/**
 * Generated from protobuf message <code>Jason.Chain33.Kernel.Protobuf.BlockSeqs</code>.
 */
class BlockSeqs extends Message
{
    /**
     * Generated from protobuf field <code>repeated .Jason.Chain33.Kernel.Protobuf.BlockSeq seqs = 1;</code>.
     */
    private $seqs;

    /**
     * Constructor.
     *
     * @param  array                                                                          $data  {
     *                                                                                               Optional. Data for populating the Message object.
     * @var \Jason\Chain33\Kernel\Protobuf\BlockSeq[]|\Google\Protobuf\Internal\RepeatedField $seqs
     *                                                                                               }
     */
    public function __construct($data = null)
    {
        Blockchain::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .Jason.Chain33.Kernel.Protobuf.BlockSeq seqs = 1;</code>.
     *
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSeqs()
    {
        return $this->seqs;
    }

    /**
     * Generated from protobuf field <code>repeated .Jason.Chain33.Kernel.Protobuf.BlockSeq seqs = 1;</code>.
     *
     * @param  \Jason\Chain33\Kernel\Protobuf\BlockSeq[]|\Google\Protobuf\Internal\RepeatedField  $var
     * @return $this
     */
    public function setSeqs($var)
    {
        $arr        = GPBUtil::checkRepeatedField($var, GPBType::MESSAGE,
            BlockSeq::class);
        $this->seqs = $arr;

        return $this;
    }
}
