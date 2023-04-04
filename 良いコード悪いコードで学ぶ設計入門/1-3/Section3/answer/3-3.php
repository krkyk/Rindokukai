<?php

use ErrorException;

class Money
{
    public function __construct(
        private int $amount,
        private string $currency,
    ) {
        if ($amount < 0) {
            throw new ErrorException('金額には0以上を指定して下さい。');
        }
        if (is_null($currency)) {
            throw new ErrorException('通貨単位を指定して下さい。');
        }
    }

    private function add(array $other)
    {
        if ($this->currency !== $other['currency']) {
            throw new ErrorException('通貨単位が違います。');
        }

        $added = $this->amount + $other['amount'];

        return new self($added, $this->currency);
    }
}