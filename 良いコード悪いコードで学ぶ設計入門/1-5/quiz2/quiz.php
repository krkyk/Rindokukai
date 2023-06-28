<?php

class GiftPoint
{
  /** @param int $value ポイント初期値 */
  public function __construct(private int $point)
  {
    if ($point < 0) {
      throw new ErrorException('ポイントが0以上ではありません。');
    }
  }

  /**
   * ポイントの加算
   */
  public function add(GiftPoint $giftPoint): self
  {
    return new self($giftPoint->point + self::$point);
  }

  /**
   * ポイントの消費
   */
  // 略
}
