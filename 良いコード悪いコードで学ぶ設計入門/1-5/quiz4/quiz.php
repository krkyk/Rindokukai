<?php

class RecoverMagicPoint
{
  /**
   * ・魔法を使うと魔法力は減少する
   * ・回復アイテムにより魔法力は回復する
   * ・魔法力には最大値が存在する（魔法力を回復できるのは最大値まで）
   * ・装備品は魔法力の最大値を増加させる
   */

  /**
   * 魔法力を回復する
   *
   * @param int $currentMagicPoint 現在の魔法力
   * @param int $originalMaxMagicPoint オリジナルの魔法力の最大値
   * @param array<string:int> $incrementalMaxMagicPoints 装備による魔法力最大値の増分
   * @param int $recoveryMagicPoint 魔法力の回復量
   *
   * @return int 回復後の魔法力
   */
  public function recoverMagicPoint(
    int $currentMagicPoint,
    int $originalMaxMagicPoint,
    array $incrementalMaxMagicPoints,
    int $recoveryMagicPoint,
  ): int {
    $currentMaxMagicPoint = $originalMaxMagicPoint;
    foreach ($incrementalMaxMagicPoints as $magicPoint) {
      $currentMaxMagicPoint += $magicPoint;
    }
    return min($currentMagicPoint + $recoveryMagicPoint, $currentMaxMagicPoint);
  }
}
