# Mempool 接口

## 获取 GetMempool

```json
[
    {
        "execer": "string",
        "payload": "json",
        "rawPayload": "string",
        "signature": {
            "ty": int32,
            "pubkey": "string",
            "signature": "string"
        },
        "fee": int64,
        "feefmt": "string",
        "expire": int64,
        "nonce": int64,
        "from": "string"
        "to": "string",
        "amount": int64,
        "amountfmt": "string",
        "groupCount": int32,
        "header": "string",
        "next": "string",
        "hash": "string"
    }
]
```

| 参数 | 类型 | 说明 |
| --- | --- | --- |
| execer | string | 执行器名称 |
| payload | json | 交易中的原始负载 |
| rawPayload | string |  |
| signature | string | 交易签名 |
| fee | int64 | 本次交易手续费，原始单位，和基本货币单位的换算关系为10^8 |
| feefmt | string | 交易手续费的人类可读字符串 |
| expire | int32 | 交易过期时间 |
| nonce | int32 | 交易识别码 |
| from | string | 签名的账户地址 |
| to | string | 目标地址 |
| amount | int64 | 本次交易金额 |
| amountfmt | string | 本次交易金额的人类可读字符串 |
| groupCount | int32 |  |
| header | string |  |
| next | string | 下一个交易的哈希 |
| hash | string | 本次交易的哈希 |