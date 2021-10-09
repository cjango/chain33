<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: blockchain.proto

namespace Jason\Chain33\Kernel\Protobuf;

use Google\Protobuf\Internal\GPBUtil;

/**
 *节点ID以及对应的Block.
 *
 * Generated from protobuf message <code>Jason.Chain33.Kernel.Protobuf.BlockPid</code>
 */
class BlockPid extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string pid = 1;</code>.
     */
    protected $pid = '';
    /**
     * Generated from protobuf field <code>.Jason.Chain33.Kernel.Protobuf.Block block = 2;</code>.
     */
    protected $block = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *                    Optional. Data for populating the Message object.
     *
     *     @var string $pid
     *     @var \Jason\Chain33\Kernel\Protobuf\Block $block
     * }
     */
    public function __construct($data = null)
    {
        \GPBMetadata\Blockchain::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string pid = 1;</code>.
     *
     * @return string
     */
    public function getPid()
    {
        return $this->pid;
    }

    /**
     * Generated from protobuf field <code>string pid = 1;</code>.
     *
     * @param  string $var
     * @return $this
     */
    public function setPid($var)
    {
        GPBUtil::checkString($var, true);
        $this->pid = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Jason.Chain33.Kernel.Protobuf.Block block = 2;</code>.
     *
     * @return \Jason\Chain33\Kernel\Protobuf\Block|null
     */
    public function getBlock()
    {
        return isset($this->block) ? $this->block : null;
    }

    public function hasBlock()
    {
        return isset($this->block);
    }

    public function clearBlock()
    {
        unset($this->block);
    }

    /**
     * Generated from protobuf field <code>.Jason.Chain33.Kernel.Protobuf.Block block = 2;</code>.
     *
     * @param  \Jason\Chain33\Kernel\Protobuf\Block $var
     * @return $this
     */
    public function setBlock($var)
    {
        GPBUtil::checkMessage($var, \Jason\Chain33\Kernel\Protobuf\Block::class);
        $this->block = $var;

        return $this;
    }
}
