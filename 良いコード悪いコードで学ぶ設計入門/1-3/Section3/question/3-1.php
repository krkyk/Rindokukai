<?php

/*  問１
    お金の計算を行うクラスを作ります。
    現在の状態だと不整値を渡せてしまいます。
    不正値受け入れ不可のクラスにして下さい。

    不正値とは
    ①$amount : 負の整数
    ②$currency : null
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
    }
}