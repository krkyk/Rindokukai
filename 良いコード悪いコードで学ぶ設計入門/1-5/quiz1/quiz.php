<?php

class MoneyData
{
  public function __construct(
    public int $amount
  ) {
    if ($amount < 0) {
      throw new ErrorException('金額には0以上を指定して下さい。');
    }
  }
}
