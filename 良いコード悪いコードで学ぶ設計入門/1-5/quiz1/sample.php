<?php

class MoneyData
{
  public function __construct(private int $amount)
  {
    if ($amount < 0) {
      throw new ErrorException('金額には0以上を指定して下さい。');
    }
  }

  public function add(MoneyData $moneyData): self
  {
    $totalMoneyAmount = $moneyData->amount + $this->amount;
    return new self($totalMoneyAmount);
  }
}

$moneyAmount1 = new MoneyData(250);
$moneyAmount2 = new MoneyData(380);
$totalMonyAmount = $moneyAmount1->add($moneyAmount2)->amount;
