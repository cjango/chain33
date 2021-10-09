<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: storage.proto

namespace Jason\Chain33\Kernel\Protobuf;

use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\Message;

/**
 * 链接存证模型.
 * Generated from protobuf message <code>Jason.Chain33.Kernel.Protobuf.LinkNotaryStorage</code>
 */
class LinkNotaryStorage extends Message
{
    /**
     *存证内容的链接，可以写入URL,或者其他可用于定位源文件得线索.
     * Generated from protobuf field <code>bytes link = 1;</code>
     */
    protected $link = '';

    /**
     *源文件得hash值，推荐使用sha256哈希，限制256位得摘要值
     * Generated from protobuf field <code>bytes hash = 2;</code>
     */
    protected $hash = '';

    /**
     *自定义的主键，可以为空，如果没传，则用txhash为key.
     * Generated from protobuf field <code>string key = 3;</code>
     */
    protected $key = '';

    /**
     *字符串值
     * Generated from protobuf field <code>string value = 4;</code>
     */
    protected $value = '';

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                       Optional. Data for populating the Message object.
     * @var string    $link
     *                       存证内容的链接，可以写入URL,或者其他可用于定位源文件得线索.
     * @var string    $hash
     *                       源文件得hash值，推荐使用sha256哈希，限制256位得摘要值
     * @var string    $key
     *                       自定义的主键，可以为空，如果没传，则用txhash为key
     * @var string    $value
     *                       字符串值
     *                       }
     */
    public function __construct($data = null)
    {
        \GPBMetadata\Storage::initOnce();
        parent::__construct($data);
    }

    /**
     *存证内容的链接，可以写入URL,或者其他可用于定位源文件得线索.
     * Generated from protobuf field <code>bytes link = 1;</code>
     *
     * @return string
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     *存证内容的链接，可以写入URL,或者其他可用于定位源文件得线索.
     * Generated from protobuf field <code>bytes link = 1;</code>
     *
     * @param  string  $var
     * @return $this
     */
    public function setLink($var)
    {
        GPBUtil::checkString($var, false);
        $this->link = $var;

        return $this;
    }

    /**
     *源文件得hash值，推荐使用sha256哈希，限制256位得摘要值
     * Generated from protobuf field <code>bytes hash = 2;</code>
     *
     * @return string
     */
    public function getHash()
    {
        return $this->hash;
    }

    /**
     *源文件得hash值，推荐使用sha256哈希，限制256位得摘要值
     * Generated from protobuf field <code>bytes hash = 2;</code>
     *
     * @param  string  $var
     * @return $this
     */
    public function setHash($var)
    {
        GPBUtil::checkString($var, false);
        $this->hash = $var;

        return $this;
    }

    /**
     *自定义的主键，可以为空，如果没传，则用txhash为key.
     * Generated from protobuf field <code>string key = 3;</code>
     *
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     *自定义的主键，可以为空，如果没传，则用txhash为key.
     * Generated from protobuf field <code>string key = 3;</code>
     *
     * @param  string  $var
     * @return $this
     */
    public function setKey($var)
    {
        GPBUtil::checkString($var, true);
        $this->key = $var;

        return $this;
    }

    /**
     *字符串值
     * Generated from protobuf field <code>string value = 4;</code>
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     *字符串值
     * Generated from protobuf field <code>string value = 4;</code>
     *
     * @param  string  $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkString($var, true);
        $this->value = $var;

        return $this;
    }
}
