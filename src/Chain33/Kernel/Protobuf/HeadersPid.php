<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: blockchain.proto

namespace Jason\Chain33\Kernel\Protobuf;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Jason.Chain33.Kernel.Protobuf.HeadersPid</code>
 */
class HeadersPid extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string pid = 1;</code>
     */
    protected $pid = '';
    /**
     * Generated from protobuf field <code>.Jason.Chain33.Kernel.Protobuf.Headers headers = 2;</code>
     */
    protected $headers = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $pid
     *     @type \Jason\Chain33\Kernel\Protobuf\Headers $headers
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Blockchain::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string pid = 1;</code>
     * @return string
     */
    public function getPid()
    {
        return $this->pid;
    }

    /**
     * Generated from protobuf field <code>string pid = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setPid($var)
    {
        GPBUtil::checkString($var, True);
        $this->pid = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Jason.Chain33.Kernel.Protobuf.Headers headers = 2;</code>
     * @return \Jason\Chain33\Kernel\Protobuf\Headers|null
     */
    public function getHeaders()
    {
        return isset($this->headers) ? $this->headers : null;
    }

    public function hasHeaders()
    {
        return isset($this->headers);
    }

    public function clearHeaders()
    {
        unset($this->headers);
    }

    /**
     * Generated from protobuf field <code>.Jason.Chain33.Kernel.Protobuf.Headers headers = 2;</code>
     * @param \Jason\Chain33\Kernel\Protobuf\Headers $var
     * @return $this
     */
    public function setHeaders($var)
    {
        GPBUtil::checkMessage($var, \Jason\Chain33\Kernel\Protobuf\Headers::class);
        $this->headers = $var;

        return $this;
    }

}

