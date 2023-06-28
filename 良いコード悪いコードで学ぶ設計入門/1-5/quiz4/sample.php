<?php

class MagicPoint
{
  /**
   * @param int $currentMagicPoint 現在の魔法力
   * @param int $originalMaxMagicPoint オリジナルの魔法力の最大値
   * @param array<string:int> $incrementalMaxMagicPoints 装備による魔法力最大値の増分
   */
  public function __construct(
    private int $currentMagicPoint,
    private int $originalMaxMagicPoint,
    private array $incrementalMaxMagicPoints,
  ) {
  }

  /**
   * 現在の魔法力を取得
   */
  public function getCurrentMagicPoint(): int
  {
    return $this->currentMagicPoint;
  }

  /**
   * 魔法力の最大値を取得
   */
  public function getMaxMagicPoint(): int
  {
    $maxMagicPoint = $this->originalMaxMagicPoint;
    foreach ($this->incrementalMaxMagicPoints as $magicPoint) {
      $maxMagicPoint += $magicPoint;
    }

    return $maxMagicPoint;
  }

  /**
   * 魔法力を消費する
   */
  // 略

  /**
   * 魔法力を回復する
   */
  public function recoveryMagicPoint(int $recoveryMagicPoint): void
  {
    $this->currentMagicPoint = min($this->currentMagicPoint + $recoveryMagicPoint, $this->getMaxMagicPoint());
  }
}
