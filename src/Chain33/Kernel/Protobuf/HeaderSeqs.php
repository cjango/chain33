<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: blockchain.proto

namespace Jason\Chain33\Kernel\Protobuf;

use Google\Protobuf\Internal\GPBUtil;

/**
 *批量推送区块的header信息.
 *
 * Generated from protobuf message <code>Jason.Chain33.Kernel.Protobuf.HeaderSeqs</code>
 */
class HeaderSeqs extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .Jason.Chain33.Kernel.Protobuf.HeaderSeq seqs = 1;</code>.
     */
    private $seqs;

    /**
     * Constructor.
     *
     * @param array $data {
     *                    Optional. Data for populating the Message object.
     *
     *     @var \Jason\Chain33\Kernel\Protobuf\HeaderSeq[]|\Google\Protobuf\Internal\RepeatedField $seqs
     * }
     */
    public function __construct($data = null)
    {
        \GPBMetadata\Blockchain::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .Jason.Chain33.Kernel.Protobuf.HeaderSeq seqs = 1;</code>.
     *
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSeqs()
    {
        return $this->seqs;
    }

    /**
     * Generated from protobuf field <code>repeated .Jason.Chain33.Kernel.Protobuf.HeaderSeq seqs = 1;</code>.
     *
     * @param  \Jason\Chain33\Kernel\Protobuf\HeaderSeq[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSeqs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Jason\Chain33\Kernel\Protobuf\HeaderSeq::class);
        $this->seqs = $arr;

        return $this;
    }
}
