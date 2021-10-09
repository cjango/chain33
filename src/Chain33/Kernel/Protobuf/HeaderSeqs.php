<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: blockchain.proto

namespace Jason\Chain33\Kernel\Protobuf;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\Message;
use Google\Protobuf\Internal\RepeatedField;
use GPBMetadata\Blockchain;

/**
 *批量推送区块的header信息.
 * Generated from protobuf message <code>Jason.Chain33.Kernel.Protobuf.HeaderSeqs</code>
 */
class HeaderSeqs extends Message
{
    /**
     * Generated from protobuf field <code>repeated .Jason.Chain33.Kernel.Protobuf.HeaderSeq seqs = 1;</code>.
     */
    private $seqs;

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                                                                                                Optional. Data for populating the Message object.
     * @var HeaderSeq[]|RepeatedField $seqs
     *                                                                                                }
     */
    public function __construct($data = null)
    {
        Blockchain::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .Jason.Chain33.Kernel.Protobuf.HeaderSeq seqs = 1;</code>.
     *
     * @return RepeatedField
     */
    public function getSeqs()
    {
        return $this->seqs;
    }

    /**
     * Generated from protobuf field <code>repeated .Jason.Chain33.Kernel.Protobuf.HeaderSeq seqs = 1;</code>.
     *
     * @param  HeaderSeq[]|RepeatedField  $var
     * @return $this
     */
    public function setSeqs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, GPBType::MESSAGE,
            HeaderSeq::class);
        $this->seqs = $arr;

        return $this;
    }
}
