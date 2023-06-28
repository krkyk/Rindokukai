<?php

class Equipment
{
  /**
   * @param string $equipmentName 装備名
   * @param int $incrementalMaxMagicPoint 魔法力最大値の増分
   */
  public function __construct(
    public string $equipmentName,
    public int $incrementalMaxMagicPoint
  ) {
  }
}

class Equipments
{
  public function __construct(
    private bool $canChange,
    private Equipment|null $head,
    private Equipment|null $body,
    private Equipment|null $foot,
  ) {
  }

  /**
   * 現在の装備品を取得する
   */
  // 略

  /**
   * 身体に対する装備品を変更する
   *
   * @param Equipment $newGear 新しい装備品
   */
  public function changeEquipToBody(Equipment $newGear): void
  {
    if ($this->canChange) {
      $this->body = $newGear;
    }
  }
}
