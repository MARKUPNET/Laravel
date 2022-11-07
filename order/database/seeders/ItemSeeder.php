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
            [
                'product_id'   => '1',
                'name'          => '5本入り',
                'price'         => '700',
            ],
            [
                'product_id'   => '1',
                'name'          => '8本入り',
                'price'         => '1130',
            ],
            [
                'product_id'   => '1',
                'name'          => '10本入り',
                'price'         => '1500',
            ],
            [
                'product_id'   => '1',
                'name'          => '15本入り',
                'price'         => '2200',
            ],
            [
                'product_id'   => '1',
                'name'          => '20本入り',
                'price'         => '2900',
            ],
            [
                'product_id'   => '1',
                'name'          => '27本入り',
                'price'         => '3810',
            ],
            [
                'product_id'   => '1',
                'name'          => '簡易包装(5本入り4パックセット)',
                'price'         => '2200',
            ],

        ]);
    }
}
