<?php

class GiftPoint
{
  const STANDARD_MEMBERSHIP_POINT = 3000;
  const PREMIUM_MEMBERSHIP_POINT = 10000;

  /** @param int $value ポイント初期値 */
  private function __construct(private int $point)
  {
    if ($point < 0) {
      throw new ErrorException('ポイントが0以上ではありません。');
    }
  }

  /** 一般会員入会時初期ポイント設定 */
  public static function standardMemberShip(): self
  {
    return new self(self::STANDARD_MEMBERSHIP_POINT);
  }

  /** プレミアム会員入会時初期ポイント設定 */
  public static function premiumMemberShip(): self
  {
    return new self(self::PREMIUM_MEMBERSHIP_POINT);
  }

  /**
   * ポイントの加算
   */
  // 略

  /**
   * ポイントの消費
   */
  // 略

  /**
   * 現在のポイントの取得
   */
  // 略
}
