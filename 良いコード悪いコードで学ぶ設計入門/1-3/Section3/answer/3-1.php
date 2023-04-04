<?php

use ErrorException;

class Money
{
    /**
     * インスタンス化された時に必ずコールされるメソッドです。
     * このメソッドにより、必要な初期化が可能です。
     * 今回の例だと、$amount, $currencyが初期化されています。
     */
    public function __construct(
        public int $amount,
        public string $currency,
    ) {
        if ($amount < 0) {
            throw new ErrorException('金額には0以上を指定して下さい。');
        }
        if (is_null($currency)) {
            throw new ErrorException('通貨単位を指定して下さい。');
        }
    }
}