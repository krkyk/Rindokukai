<?php

class AmountIncludingTax
{
  const TAX = 1.1;

  /**
   * 税込金額の計算
   */
  public static function calcAmountIncludingTax(int $amount): int
  {
    return ceil($amount * self::TAX);
  }
}
