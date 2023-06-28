<?php

require 'sub.php';

class OrderManager
{
  public static function add(
    int $moneyAmount1,
    int $moneyAmount2
  ): int {
    return $moneyAmount1 + $moneyAmount2;
  }
}

$moneyAmount1 = new MoneyData(100);
$moneyAmount2 = new MoneyData(370);
$totalMonyAmount = OrderManager::add($moneyAmount1->amount, $moneyAmount2->amount);
