<?php

namespace Jason\Chain33\Autonomy;

use DateTimeInterface;
use Illuminate\Support\Carbon;
use Jason\Chain33\Exceptions\ChainException;
use Jason\Chain33\Kernel\BaseClient;

/**
 * Class Client.
 */
class Client extends BaseClient
{

    /**
     * Notes   : 提案董事会成员
     *
     * @Date   : 2021/12/17 5:02 PM
     * @Author : <Jason.C>
     * @param  DateTimeInterface  $date
     * @param  array  $boards
     * @param  int  $start
     * @param  int  $end
     * @param  int  $action
     * @return mixed
     * @throws ChainException
     */
    public function propBoard(DateTimeInterface $date, array $boards, int $start, int $end, int $action = 1): string
    {
        return $this->client->CreateTransaction([
            'execer'     => $this->parseExecer('autonomy'),
            'actionName' => 'PropBoard',
            'payload'    => [
                'from'             => Carbon::parse($date)->format('Y'),
                'month'            => Carbon::parse($date)->format('m'),
                'day'              => Carbon::parse($date)->format('d'),
                'boards'           => $boards,
                'startBlockHeight' => $start,
                'endBlockHeight'   => $end,
                'boardUpdate'      => $action,
            ],
        ]);
    }

    /**
     * Notes   : 撤销提案董事会成员
     *
     * @Date   : 2021/12/17 5:03 PM
     * @Author : <Jason.C>
     * @param  string  $proposalID
     * @return mixed
     * @throws ChainException
     */
    public function revokePropBoard(string $proposalID): string
    {
        return $this->client->CreateTransaction([
            'execer'   => $this->parseExecer('autonomy'),
            'funcName' => 'RvkPropBoard',
            'payload'  => [
                'proposalID' => $proposalID,
            ],
        ]);
    }
}
