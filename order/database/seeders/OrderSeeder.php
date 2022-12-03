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
                'pricesum' => '700',
                'created_at' => '2022-11-01 00:00:00',
                'updated_at' => '2022-11-01 00:00:00',
            ],
            [
                'serialnumber' => '20221128002',
                'products_id' => '2',
                'noshis_id' => '2',
                'deliveries_id' => '2',
                'guests_id' => '2',
                'pricesum' => '700',
                'created_at' => '2022-11-02 00:00:00',
                'updated_at' => '2022-11-02 00:00:00',
            ],
            [
                'serialnumber' => '20221128003',
                'products_id' => '1',
                'noshis_id' => '3',
                'deliveries_id' => '3',
                'guests_id' => '3',
                'pricesum' => '700',
                'created_at' => '2022-11-03 00:00:00',
                'updated_at' => '2022-11-03 00:00:00',
            ],
            [
                'serialnumber' => '20221128004',
                'products_id' => '1',
                'noshis_id' => '4',
                'deliveries_id' => '4',
                'guests_id' => '4',
                'pricesum' => '700',
                'created_at' => '2022-11-10 00:00:00',
                'updated_at' => '2022-11-10 00:00:00',
            ],
            [
                'serialnumber' => '20221128005',
                'products_id' => '1',
                'noshis_id' => '5',
                'deliveries_id' => '5',
                'guests_id' => '5',
                'pricesum' => '700',
                'created_at' => '2022-11-10 00:00:00',
                'updated_at' => '2022-11-10 00:00:00',
            ],
            [
                'serialnumber' => '20221128006',
                'products_id' => '1',
                'noshis_id' => '6',
                'deliveries_id' => '6',
                'guests_id' => '6',
                'pricesum' => '700',
                'created_at' => '2022-11-10 00:00:00',
                'updated_at' => '2022-11-10 00:00:00',
            ],
            [
                'serialnumber' => '20221128007',
                'products_id' => '1',
                'noshis_id' => '7',
                'deliveries_id' => '7',
                'guests_id' => '7',
                'pricesum' => '700',
                'created_at' => '2022-11-11 00:00:00',
                'updated_at' => '2022-11-11 00:00:00',
            ],
            [
                'serialnumber' => '20221128008',
                'products_id' => '1',
                'noshis_id' => '8',
                'deliveries_id' => '8',
                'guests_id' => '8',
                'pricesum' => '700',
                'created_at' => '2022-11-20 00:00:00',
                'updated_at' => '2022-11-20 00:00:00',
            ],
            [
                'serialnumber' => '20221128009',
                'products_id' => '1',
                'noshis_id' => '9',
                'deliveries_id' => '9',
                'guests_id' => '9',
                'pricesum' => '700',
                'created_at' => '2022-11-20 00:00:00',
                'updated_at' => '2022-11-20 00:00:00',
            ],
            [
                'serialnumber' => '20221128010',
                'products_id' => '1',
                'noshis_id' => '10',
                'deliveries_id' => '10',
                'guests_id' => '10',
                'pricesum' => '700',
                'created_at' => '2022-11-20 00:00:00',
                'updated_at' => '2022-11-20 00:00:00',
            ],
            [
                'serialnumber' => '20221128011',
                'products_id' => '1',
                'noshis_id' => '11',
                'deliveries_id' => '11',
                'guests_id' => '11',
                'pricesum' => '700',
                'created_at' => '2022-11-20 00:00:00',
                'updated_at' => '2022-11-20 00:00:00',
            ],
        ]);
    }
}
