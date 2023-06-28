<?php

class EquipGear
{
  /** @param Party $party パーティクラス（メンバー一覧が定義されている） */
  public function __construct(
    private Party $party
  ) {
  }

  /**
   * 装備品を変更する
   *
   * @param int $menberId 装備する対象者のID
   * @param Gear $newGear 新しい装備品
   */
  public function equipGear(int $menberId, Gear $newGear): void
  {
    if ($this->party->members[$menberId]->equipments->canChange()) {
      $this->party->members[$menberId]->equipments->gear = $newGear;
    }
  }
}
