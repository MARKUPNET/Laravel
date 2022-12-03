<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
            // 長沼かりんとう饅頭
            [
                'products_id'    => '1',
                'name'          => '5本入り',
                'unit'          => '箱',
                'price'         => '700',
                'created_at' => '2022-11-28 00:00:00',
                'updated_at' => '2022-11-28 00:00:00',
            ],
            [
                'products_id'   => '1',
                'name'          => '8本入り',
                'unit'          => '箱',
                'price'         => '1130',
                'created_at' => '2022-11-28 00:00:00',
                'updated_at' => '2022-11-28 00:00:00',
            ],
            [
                'products_id'   => '1',
                'name'          => '10本入り',
                'unit'          => '箱',
                'price'         => '1500',
                'created_at' => '2022-11-28 00:00:00',
                'updated_at' => '2022-11-28 00:00:00',
            ],
            [
                'products_id'   => '1',
                'name'          => '15本入り',
                'unit'          => '箱',
                'price'         => '2200',
                'created_at' => '2022-11-28 00:00:00',
                'updated_at' => '2022-11-28 00:00:00',
            ],
            [
                'products_id'   => '1',
                'name'          => '20本入り',
                'unit'          => '箱',
                'price'         => '2900',
                'created_at' => '2022-11-28 00:00:00',
                'updated_at' => '2022-11-28 00:00:00',
            ],
            [
                'products_id'   => '1',
                'name'          => '27本入り',
                'unit'          => '箱',
                'price'         => '3810',
                'created_at' => '2022-11-28 00:00:00',
                'updated_at' => '2022-11-28 00:00:00',
            ],
            [
                'products_id'   => '1',
                'name'          => '簡易包装(5本入り4パックセット)',
                'unit'          => 'セット',
                'price'         => '2200',
                'created_at' => '2022-11-28 00:00:00',
                'updated_at' => '2022-11-28 00:00:00',
            ],
            // ながぬま ふ輪っと
            [
                'products_id'    => '2',
                'name'          => '5個入り',
                'unit'          => '箱',
                'price'         => '1300',
                'created_at' => '2022-11-28 00:00:00',
                'updated_at' => '2022-11-28 00:00:00',
            ],
            [
                'products_id'   => '2',
                'name'          => '9個入り',
                'unit'          => '箱',
                'price'         => '2320',
                'created_at' => '2022-11-28 00:00:00',
                'updated_at' => '2022-11-28 00:00:00',
            ],
            [
                'products_id'   => '2',
                'name'          => '12個入り',
                'unit'          => '箱',
                'price'         => '3600',
                'created_at' => '2022-11-28 00:00:00',
                'updated_at' => '2022-11-28 00:00:00',
            ],
            // あかねいろマドレーヌ
            [
                'products_id'    => '3',
                'name'          => '5個入り',
                'unit'          => '箱',
                'price'         => '1050',
                'created_at' => '2022-11-28 00:00:00',
                'updated_at' => '2022-11-28 00:00:00',
            ],
            [
                'products_id'   => '3',
                'name'          => '8個入り',
                'unit'          => '箱',
                'price'         => '1690',
                'created_at' => '2022-11-28 00:00:00',
                'updated_at' => '2022-11-28 00:00:00',
            ],
            [
                'products_id'   => '3',
                'name'          => '10個入り',
                'unit'          => '箱',
                'price'         => '2100',
                'created_at' => '2022-11-28 00:00:00',
                'updated_at' => '2022-11-28 00:00:00',
            ],
            [
                'products_id'   => '3',
                'name'          => '15個入り',
                'unit'          => '箱',
                'price'         => '3100',
                'created_at' => '2022-11-28 00:00:00',
                'updated_at' => '2022-11-28 00:00:00',
            ],
        ]);
    }
}
