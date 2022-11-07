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
            ],
            [
                'products_id'   => '1',
                'name'          => '8本入り',
                'unit'          => '箱',
                'price'         => '1130',
            ],
            [
                'products_id'   => '1',
                'name'          => '10本入り',
                'unit'          => '箱',
                'price'         => '1500',
            ],
            [
                'products_id'   => '1',
                'name'          => '15本入り',
                'unit'          => '箱',
                'price'         => '2200',
            ],
            [
                'products_id'   => '1',
                'name'          => '20本入り',
                'unit'          => '箱',
                'price'         => '2900',
            ],
            [
                'products_id'   => '1',
                'name'          => '27本入り',
                'unit'          => '箱',
                'price'         => '3810',
            ],
            [
                'products_id'   => '1',
                'name'          => '簡易包装(5本入り4パックセット)',
                'unit'          => 'セット',
                'price'         => '2200',
            ],
            // ながぬま ふ輪っと
            [
                'products_id'    => '2',
                'name'          => '5個入り',
                'unit'          => '箱',
                'price'         => '1300',
            ],
            [
                'products_id'   => '2',
                'name'          => '9個入り',
                'unit'          => '箱',
                'price'         => '2320',
            ],
            [
                'products_id'   => '2',
                'name'          => '12個入り',
                'unit'          => '箱',
                'price'         => '3600',
            ],
            // あかねいろマドレーヌ
            [
                'products_id'    => '3',
                'name'          => '5個入り',
                'unit'          => '箱',
                'price'         => '1050',
            ],
            [
                'products_id'   => '3',
                'name'          => '8個入り',
                'unit'          => '箱',
                'price'         => '1690',
            ],
            [
                'products_id'   => '3',
                'name'          => '10個入り',
                'unit'          => '箱',
                'price'         => '2100',
            ],
            [
                'products_id'   => '3',
                'name'          => '15個入り',
                'unit'          => '箱',
                'price'         => '3100',
            ],

        ]);
    }
}
