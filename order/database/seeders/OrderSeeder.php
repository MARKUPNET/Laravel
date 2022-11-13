<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->insert([
            [
                'serialnumber' => '20221101001',
                'products_id' => '1',
                'noshis_id' => '1',
                'deliveries_id' => '1',
                'guests_id' => '1',
                'pricesum' => '1000',
            ],
            [
                'serialnumber' => '20221101002',
                'products_id' => '2',
                'noshis_id' => '1',
                'deliveries_id' => '1',
                'guests_id' => '2',
                'pricesum' => '2000',
            ],
        ]);
    }
}
