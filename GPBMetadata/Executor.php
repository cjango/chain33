<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: executor.proto

namespace GPBMetadata;

class Executor
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Transaction::initOnce();
        $pool->internalAddGeneratedFile(
            '
?
executor.protoJason.Chain33.Kernel.Protobuf"
Genesis
isrun ("?

ExecTxList
	stateHash (

parentHash (
mainHash (

mainHeight	 (
	blockTime (
height (

difficulty (
	isMempool (7
txs (2*.Jason.Chain33.Kernel.Protobuf.Transaction":
Query
execer (
funcName (	
payload ("A

CreateTxIn
execer (

actionName (	
payload ("
ArrayConfig
value (	"
StringConfig
value (	"
Int32Config
value ("?

ConfigItem
key (	
addr (	9
arr (2*.Jason.Chain33.Kernel.Protobuf.ArrayConfigH :
str (2+.Jason.Chain33.Kernel.Protobuf.StringConfigH 9
int (2*.Jason.Chain33.Kernel.Protobuf.Int32ConfigH 

Ty (B
value"D
ModifyConfig
key (	
value (	

op (	
addr (	"?
ReceiptConfig7
prev (2).Jason.Chain33.Kernel.Protobuf.ConfigItem:
current (2).Jason.Chain33.Kernel.Protobuf.ConfigItem")
ReplyConfig
key (	
value (	"~
HistoryCertStore
	rootcerts (
intermediateCerts (
revocationList (
	curHeigth (
	nxtHeight (bproto3'
        , true);

        static::$is_initialized = true;
    }
}

