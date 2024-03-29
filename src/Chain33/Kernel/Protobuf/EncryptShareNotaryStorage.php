<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: storage.proto

namespace Jason\Chain33\Kernel\Protobuf;

use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\Message;

/**
 * 分享隐私存证模型,需要完备的sdk或者相应的密钥库支持
 * Generated from protobuf message <code>Jason.Chain33.Kernel.Protobuf.EncryptShareNotaryStorage</code>.
 */
class EncryptShareNotaryStorage extends Message
{
    /**
     *存证明文内容的hash值，推荐使用sha256哈希，限制256位得摘要值
     * Generated from protobuf field <code>bytes contentHash = 1;</code>.
     */
    protected $contentHash = '';

    /**
     *源文件得密文。,用公钥地址加密.
     * Generated from protobuf field <code>bytes encryptContent = 2;</code>.
     */
    protected $encryptContent = '';

    /**
     *公钥.
     * Generated from protobuf field <code>bytes pubKey = 3;</code>.
     */
    protected $pubKey = '';

    /**
     *自定义的主键，可以为空，如果没传，则用txhash为key.
     * Generated from protobuf field <code>string key = 4;</code>.
     */
    protected $key = '';

    /**
     *字符串值
     * Generated from protobuf field <code>string value = 5;</code>.
     */
    protected $value = '';

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                       Optional. Data for populating the Message object.
     *
     * @var string $contentHash
     *             存证明文内容的hash值，推荐使用sha256哈希，限制256位得摘要值
     * @var string $encryptContent
     *             源文件得密文。,用公钥地址加密
     * @var string $pubKey
     *             公钥
     * @var string $key
     *             自定义的主键，可以为空，如果没传，则用txhash为key
     * @var string $value
     *             字符串值
     *             }
     */
    public function __construct($data = null)
    {
        \GPBMetadata\Storage::initOnce();
        parent::__construct($data);
    }

    /**
     *存证明文内容的hash值，推荐使用sha256哈希，限制256位得摘要值
     * Generated from protobuf field <code>bytes contentHash = 1;</code>.
     *
     * @return string
     */
    public function getContentHash()
    {
        return $this->contentHash;
    }

    /**
     *存证明文内容的hash值，推荐使用sha256哈希，限制256位得摘要值
     * Generated from protobuf field <code>bytes contentHash = 1;</code>.
     *
     * @param  string  $var
     * @return $this
     */
    public function setContentHash($var)
    {
        GPBUtil::checkString($var, false);
        $this->contentHash = $var;

        return $this;
    }

    /**
     *源文件得密文。,用公钥地址加密.
     * Generated from protobuf field <code>bytes encryptContent = 2;</code>.
     *
     * @return string
     */
    public function getEncryptContent()
    {
        return $this->encryptContent;
    }

    /**
     *源文件得密文。,用公钥地址加密.
     * Generated from protobuf field <code>bytes encryptContent = 2;</code>.
     *
     * @param  string  $var
     * @return $this
     */
    public function setEncryptContent($var)
    {
        GPBUtil::checkString($var, false);
        $this->encryptContent = $var;

        return $this;
    }

    /**
     *公钥.
     * Generated from protobuf field <code>bytes pubKey = 3;</code>.
     *
     * @return string
     */
    public function getPubKey()
    {
        return $this->pubKey;
    }

    /**
     *公钥.
     * Generated from protobuf field <code>bytes pubKey = 3;</code>.
     *
     * @param  string  $var
     * @return $this
     */
    public function setPubKey($var)
    {
        GPBUtil::checkString($var, false);
        $this->pubKey = $var;

        return $this;
    }

    /**
     *自定义的主键，可以为空，如果没传，则用txhash为key.
     * Generated from protobuf field <code>string key = 4;</code>.
     *
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     *自定义的主键，可以为空，如果没传，则用txhash为key.
     * Generated from protobuf field <code>string key = 4;</code>.
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
     * Generated from protobuf field <code>string value = 5;</code>.
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     *字符串值
     * Generated from protobuf field <code>string value = 5;</code>.
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
