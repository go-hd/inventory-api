<?php

use Carbon\Carbon;

/**
 * Class LotData
 */
class LotData
{
    /**
     * @return array
     */
    public static function getDataList()
    {
        $now = Carbon::now();

        return [
            [
                'product_id' => 1,
                'user_id' => 1,
                'location_id' => 1,
                'lot_number' => self::getLotNumber(),
                'name' => '非常食セット 3日分',
                'ordered_at' => $now,
                'ordered_quantity' => 0,
                'is_reflected_in_stock' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'product_id' => 2,
                'user_id' => 1,
                'location_id' => 1,
                'lot_number' => self::getLotNumber(),
                'name' => '非常食セット 5日分',
                'ordered_at' => $now,
                'ordered_quantity' => 0,
                'is_reflected_in_stock' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'product_id' => 3,
                'user_id' => 1,
                'location_id' => 1,
                'lot_number' => self::getLotNumber(),
                'name' => '非常食セット 7日分',
                'ordered_at' => $now,
                'ordered_quantity' => 0,
                'is_reflected_in_stock' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'product_id' => 4,
                'user_id' => 1,
                'location_id' => 1,
                'lot_number' => self::getLotNumber(),
                'name' => '防災セット 1人用 Connect',
                'ordered_at' => $now,
                'ordered_quantity' => 0,
                'is_reflected_in_stock' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'product_id' => 5,
                'user_id' => 1,
                'location_id' => 1,
                'lot_number' => self::getLotNumber(),
                'name' => '防災セット 2人用 Connect',
                'ordered_at' => $now,
                'ordered_quantity' => 0,
                'is_reflected_in_stock' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'product_id' => 6,
                'user_id' => 1,
                'location_id' => 1,
                'lot_number' => self::getLotNumber(),
                'name' => '防災セット 1人用 Relief',
                'ordered_at' => $now,
                'ordered_quantity' => 0,
                'is_reflected_in_stock' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'product_id' => 7,
                'user_id' => 1,
                'location_id' => 1,
                'lot_number' => self::getLotNumber(),
                'name' => '防災セット 2人用 Relief',
                'ordered_at' => $now,
                'ordered_quantity' => 0,
                'is_reflected_in_stock' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'product_id' => 8,
                'user_id' => 1,
                'location_id' => 1,
                'lot_number' => self::getLotNumber(),
                'name' => 'ダイナモラジオライト ソーラー ホワイト',
                'ordered_at' => $now,
                'ordered_quantity' => 0,
                'is_reflected_in_stock' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'product_id' => 9,
                'user_id' => 1,
                'location_id' => 1,
                'lot_number' => self::getLotNumber(),
                'name' => 'ダイナモラジオライト 乾電池式 ホワイト',
                'ordered_at' => $now,
                'ordered_quantity' => 0,
                'is_reflected_in_stock' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'product_id' => 10,
                'user_id' => 1,
                'location_id' => 1,
                'lot_number' => self::getLotNumber(),
                'name' => 'ダイナモラジオライト 乾電池式 ブラック',
                'ordered_at' => $now,
                'ordered_quantity' => 0,
                'is_reflected_in_stock' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'product_id' => 11,
                'user_id' => 1,
                'location_id' => 1,
                'lot_number' => self::getLotNumber(),
                'name' => 'オサメット ホワイト',
                'ordered_at' => $now,
                'ordered_quantity' => 0,
                'is_reflected_in_stock' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'product_id' => 12,
                'user_id' => 1,
                'location_id' => 1,
                'lot_number' => self::getLotNumber(),
                'name' => '防災セット 車載用',
                'ordered_at' => $now,
                'ordered_quantity' => 0,
                'is_reflected_in_stock' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'product_id' => 13,
                'user_id' => 1,
                'location_id' => 1,
                'lot_number' => self::getLotNumber(),
                'name' => '防災セット 女性用',
                'ordered_at' => $now,
                'ordered_quantity' => 0,
                'is_reflected_in_stock' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'product_id' => 14,
                'user_id' => 1,
                'location_id' => 1,
                'lot_number' => self::getLotNumber(),
                'name' => '防災セット オフィス用',
                'ordered_at' => $now,
                'ordered_quantity' => 0,
                'is_reflected_in_stock' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'product_id' => 15,
                'user_id' => 1,
                'location_id' => 1,
                'lot_number' => self::getLotNumber(),
                'name' => '防災セット 共通中身',
                'ordered_at' => $now,
                'ordered_quantity' => 0,
                'is_reflected_in_stock' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'product_id' => 16,
                'user_id' => 1,
                'location_id' => 1,
                'lot_number' => self::getLotNumber(),
                'name' => '寝袋 1.3kg グリーン',
                'ordered_at' => $now,
                'ordered_quantity' => 0,
                'is_reflected_in_stock' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'product_id' => 17,
                'user_id' => 1,
                'location_id' => 1,
                'lot_number' => self::getLotNumber(),
                'name' => '寝袋 1.3kg ブルー',
                'ordered_at' => $now,
                'ordered_quantity' => 0,
                'is_reflected_in_stock' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'product_id' => 18,
                'user_id' => 1,
                'location_id' => 1,
                'lot_number' => self::getLotNumber(),
                'name' => '寝袋 1.8kg グリーン',
                'ordered_at' => $now,
                'ordered_quantity' => 0,
                'is_reflected_in_stock' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'product_id' => 19,
                'user_id' => 1,
                'location_id' => 1,
                'lot_number' => self::getLotNumber(),
                'name' => '寝袋 1.8kg ブルー',
                'ordered_at' => $now,
                'ordered_quantity' => 0,
                'is_reflected_in_stock' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'product_id' => 20,
                'user_id' => 1,
                'location_id' => 1,
                'lot_number' => self::getLotNumber(),
                'name' => 'くまモンリュック',
                'ordered_at' => $now,
                'ordered_quantity' => 0,
                'is_reflected_in_stock' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'product_id' => 21,
                'user_id' => 1,
                'location_id' => 1,
                'lot_number' => self::getLotNumber(),
                'name' => '目かくしポンチョ',
                'ordered_at' => $now,
                'ordered_quantity' => 0,
                'is_reflected_in_stock' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'product_id' => 22,
                'user_id' => 1,
                'location_id' => 1,
                'lot_number' => self::getLotNumber(),
                'name' => '防災マニュアル',
                'ordered_at' => $now,
                'ordered_quantity' => 0,
                'is_reflected_in_stock' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'product_id' => 23,
                'user_id' => 1,
                'location_id' => 1,
                'lot_number' => self::getLotNumber(),
                'name' => 'ポータブルウォシュレット',
                'ordered_at' => $now,
                'ordered_quantity' => 0,
                'is_reflected_in_stock' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'product_id' => 24,
                'user_id' => 1,
                'location_id' => 1,
                'lot_number' => self::getLotNumber(),
                'name' => '携帯 洗たくパック',
                'ordered_at' => $now,
                'ordered_quantity' => 0,
                'is_reflected_in_stock' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'product_id' => 25,
                'user_id' => 1,
                'location_id' => 1,
                'lot_number' => self::getLotNumber(),
                'name' => 'からだふき',
                'ordered_at' => $now,
                'ordered_quantity' => 0,
                'is_reflected_in_stock' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'product_id' => 26,
                'user_id' => 1,
                'location_id' => 1,
                'lot_number' => self::getLotNumber(),
                'name' => 'ウォータータンク',
                'ordered_at' => $now,
                'ordered_quantity' => 0,
                'is_reflected_in_stock' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'product_id' => 27,
                'user_id' => 1,
                'location_id' => 1,
                'lot_number' => self::getLotNumber(),
                'name' => 'エアーマット',
                'ordered_at' => $now,
                'ordered_quantity' => 0,
                'is_reflected_in_stock' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'product_id' => 28,
                'user_id' => 1,
                'location_id' => 1,
                'lot_number' => self::getLotNumber(),
                'name' => 'モーリアンヒートパック M',
                'ordered_at' => $now,
                'ordered_quantity' => 0,
                'is_reflected_in_stock' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'product_id' => 29,
                'user_id' => 1,
                'location_id' => 1,
                'lot_number' => self::getLotNumber(),
                'name' => 'ポータブル非常用トイレ',
                'ordered_at' => $now,
                'ordered_quantity' => 0,
                'is_reflected_in_stock' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'product_id' => 30,
                'user_id' => 1,
                'location_id' => 1,
                'lot_number' => self::getLotNumber(),
                'name' => 'アルミブランケット',
                'ordered_at' => $now,
                'ordered_quantity' => 0,
                'is_reflected_in_stock' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'product_id' => 31,
                'user_id' => 1,
                'location_id' => 1,
                'lot_number' => self::getLotNumber(),
                'name' => 'ガラケー変換ケーブルセット',
                'ordered_at' => $now,
                'ordered_quantity' => 0,
                'is_reflected_in_stock' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'product_id' => 32,
                'user_id' => 1,
                'location_id' => 1,
                'lot_number' => self::getLotNumber(),
                'name' => 'ネットワークカメラ',
                'ordered_at' => $now,
                'ordered_quantity' => 0,
                'is_reflected_in_stock' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ],

        ];
    }

    /**
     * ロットナンバー (12桁の半角英数字) を生成する
     *
     * @return string|null
     */
    private static function getLotNumber()
    {
        $str = array_merge(range('a', 'z'), range('0', '9'), range('A', 'Z'));
        $lot_number = null;
        for ($i = 0; $i < 12; $i++) {
            $lot_number .= $str[rand(0, count($str) - 1)];
        }
        return $lot_number;
    }
}
