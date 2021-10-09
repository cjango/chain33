<?php

namespace Jason\Chain33\Oracle;

use DateTimeInterface;
use Jason\Chain33\Kernel\BaseClient;

/**
 * Class Client.
 */
class Client extends BaseClient
{
    /**
     * Notes   : 生成发布事件.
     *
     * @Date   : 2021/1/27 10:45 下午
     * @Author : <Jason.C>
     * @param  string             $type          事件类型
     * @param  string             $subType       事件子类型
     * @param  DateTimeInterface  $time          事件结果预计公布时间，UTC时间（时间戳）
     * @param  string             $content       事件内容，例如可以用json格式表示
     * @param  string             $introduction  事件介绍
     * @param  string             $privateKey    私钥
     * @return string            交易结果HASH（事件ID）
     */
    public function create(
        string $type,
        string $subType,
        DateTimeInterface $time,
        string $content,
        string $privateKey,
        string $introduction = ''
    ): string {
        $txHex = $this->client->CreateTransaction([
            'execer'     => 'oracle',
            'actionName' => 'EventPublish',
            'payload'    => [
                'type'         => $type,
                'subType'      => $subType,
                'time'         => $time->getTimestamp(),
                'content'      => $content,
                'introduction' => $introduction,
            ],
        ]);

        return $this->app->transaction->finalSend($txHex, $privateKey);
    }

    /**
     * Notes   : 取消发布事件.
     *
     * @Date   : 2021/1/27 10:53 下午
     * @Author : <Jason.C>
     * @param  string  $eventID  发布事件的事件ID
     * @param  string  $privateKey
     * @return string 交易结果HASH
     */
    public function abort(string $eventID, string $privateKey): string
    {
        $txHex = $this->client->CreateTransaction([
            'execer'     => 'oracle',
            'actionName' => 'EventAbort',
            'payload'    => [
                'eventID' => $eventID,
            ],
        ]);

        return $this->app->transaction->finalSend($txHex, $privateKey);
    }

    /**
     * Notes   : 生成预发布事件结果交易.
     *
     * @Date   : 2021/3/30 3:27 下午
     * @Author : <Jason.C>
     * @param  string  $eventID     发布事件的事件ID
     * @param  string  $source      发布结果的源，比如XX体育
     * @param  string  $result      发布的事件结果，比如比赛比分
     * @param  string  $privateKey  签名私钥
     * @return string
     */
    public function preview(string $eventID, string $source, string $result, string $privateKey): string
    {
        $txHex = $this->client->CreateTransaction([
            'execer'     => 'oracle',
            'actionName' => 'ResultPrePublish',
            'payload'    => [
                'eventID' => $eventID,
                'source'  => $source,
                'result'  => $result,
            ],
        ]);

        return $this->app->transaction->finalSend($txHex, $privateKey);
    }

    /**
     * Notes   : 生成取消预发布结果的交易.
     *
     * @Date   : 2021/3/30 3:29 下午
     * @Author : <Jason.C>
     * @param  string  $eventID
     * @param  string  $privateKey
     * @return string
     */
    public function previewAbort(string $eventID, string $privateKey): string
    {
        $txHex = $this->client->CreateTransaction([
            'execer'     => 'oracle',
            'actionName' => 'EventAbort',
            'payload'    => [
                'eventID' => $eventID,
            ],
        ]);

        return $this->app->transaction->finalSend($txHex, $privateKey);
    }

    /**
     * Notes   : 生成正式发布事件结果交易.
     *
     * @Date   : 2021/3/30 3:30 下午
     * @Author : <Jason.C>
     * @param  string  $eventID
     * @param  string  $source
     * @param  string  $result
     * @param  string  $privateKey
     * @return string
     */
    public function publish(string $eventID, string $source, string $result, string $privateKey): string
    {
        $txHex = $this->client->CreateTransaction([
            'execer'     => 'oracle',
            'actionName' => 'ResultPublish',
            'payload'    => [
                'eventID' => $eventID,
                'source'  => $source,
                'result'  => $result,
            ],
        ]);

        return $this->app->transaction->finalSend($txHex, $privateKey);
    }

    /**
     * Notes   : 根据发布事件的事件ID查询当前状态
     *
     * @Date   : 2021/3/30 3:31 下午
     * @Author : <Jason.C>
     * @param  string  $eventID
     * @return mixed
     */
    public function query(string $eventID)
    {
        return $this->client->Query([
            'execer'   => 'oracle',
            'funcName' => 'QueryOraclesByIDs',
            'payload'  => [
                'eventID' => $eventID,
            ],
        ])['status'];
    }
}
