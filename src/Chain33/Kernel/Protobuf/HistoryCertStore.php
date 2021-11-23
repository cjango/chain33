<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: executor.proto

namespace Jason\Chain33\Kernel\Protobuf;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\Message;
use Google\Protobuf\Internal\RepeatedField;
use GPBMetadata\Executor;

/**
 * Generated from protobuf message <code>Jason.Chain33.Kernel.Protobuf.HistoryCertStore</code>.
 */
class HistoryCertStore extends Message
{
    /**
     * Generated from protobuf field <code>int64 curHeigth = 4;</code>.
     */
    protected $curHeigth = 0;

    /**
     * Generated from protobuf field <code>int64 nxtHeight = 5;</code>.
     */
    protected $nxtHeight = 0;

    /**
     * Generated from protobuf field <code>repeated bytes rootcerts = 1;</code>.
     */
    private $rootcerts;

    /**
     * Generated from protobuf field <code>repeated bytes intermediateCerts = 2;</code>.
     */
    private $intermediateCerts;

    /**
     * Generated from protobuf field <code>repeated bytes revocationList = 3;</code>.
     */
    private $revocationList;

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                       Optional. Data for populating the Message object.
     *
     * @var string[]|RepeatedField $rootcerts
     * @var string[]|RepeatedField $intermediateCerts
     * @var string[]|RepeatedField $revocationList
     * @var int|string $curHeigth
     * @var int|string $nxtHeight
     *                 }
     */
    public function __construct($data = null)
    {
        Executor::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated bytes rootcerts = 1;</code>.
     *
     * @return RepeatedField
     */
    public function getRootcerts()
    {
        return $this->rootcerts;
    }

    /**
     * Generated from protobuf field <code>repeated bytes rootcerts = 1;</code>.
     *
     * @param  string[]|RepeatedField  $var
     * @return $this
     */
    public function setRootcerts($var)
    {
        $arr             = GPBUtil::checkRepeatedField($var, GPBType::BYTES);
        $this->rootcerts = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated bytes intermediateCerts = 2;</code>.
     *
     * @return RepeatedField
     */
    public function getIntermediateCerts()
    {
        return $this->intermediateCerts;
    }

    /**
     * Generated from protobuf field <code>repeated bytes intermediateCerts = 2;</code>.
     *
     * @param  string[]|RepeatedField  $var
     * @return $this
     */
    public function setIntermediateCerts($var)
    {
        $arr                     = GPBUtil::checkRepeatedField($var, GPBType::BYTES);
        $this->intermediateCerts = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated bytes revocationList = 3;</code>.
     *
     * @return RepeatedField
     */
    public function getRevocationList()
    {
        return $this->revocationList;
    }

    /**
     * Generated from protobuf field <code>repeated bytes revocationList = 3;</code>.
     *
     * @param  string[]|RepeatedField  $var
     * @return $this
     */
    public function setRevocationList($var)
    {
        $arr                  = GPBUtil::checkRepeatedField($var, GPBType::BYTES);
        $this->revocationList = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 curHeigth = 4;</code>.
     *
     * @return int|string
     */
    public function getCurHeigth()
    {
        return $this->curHeigth;
    }

    /**
     * Generated from protobuf field <code>int64 curHeigth = 4;</code>.
     *
     * @param  int|string  $var
     * @return $this
     */
    public function setCurHeigth($var)
    {
        GPBUtil::checkInt64($var);
        $this->curHeigth = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 nxtHeight = 5;</code>.
     *
     * @return int|string
     */
    public function getNxtHeight()
    {
        return $this->nxtHeight;
    }

    /**
     * Generated from protobuf field <code>int64 nxtHeight = 5;</code>.
     *
     * @param  int|string  $var
     * @return $this
     */
    public function setNxtHeight($var)
    {
        GPBUtil::checkInt64($var);
        $this->nxtHeight = $var;

        return $this;
    }
}
