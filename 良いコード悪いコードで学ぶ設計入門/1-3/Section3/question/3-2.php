<?php

use ErrorException;

/*  問２
    こちらにデータクラス・計算処理を行うクラスがあります。
    データとデータを操作するロジックが分散している構造を「低凝集」と呼びますが、
    「高凝集」な構造に書き換えて下さい。
*/
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

class AddMoney
{
    public int $amount;
    public string $currency;

    /**
     * インスタンス化する時に必ず下記2点を引数に指定する必要があります。
     * ex:) new AddMoney(100, 'yen')
     * 
     * @param int $amount 所持金
     * @param string $currency 通貨単位
     */
    public function __construct(
        int $amount,
        string $currency
    ) {
        $this->amount = $amount;
        $this->currency = $currency;
    }

    /**
     * 所持金にお金を足す処理を行うメソッド
     * 
     * @param array{amount: int, currency: string} $other
     */
    public function add(array $other) {
        if ($this->currency !== $other['currency']) {
            throw new ErrorException('通貨単位が違います。');
        }

        $this->amount += $other['amount'];
    }
}