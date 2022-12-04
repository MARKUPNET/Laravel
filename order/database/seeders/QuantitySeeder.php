<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuantitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('quantities')->insert([
            [
                'orders_id' => '1',
                'items_id' => '1',
                'quantity' => '1',
                'created_at' => '2022-11-01 00:00:00',
                'updated_at' => '2022-11-01 00:00:00',
            ],
            [
                'orders_id' => '2',
                'items_id' => '8',
                'quantity' => '1',
                'created_at' => '2022-11-02 00:00:00',
                'updated_at' => '2022-11-02 00:00:00',
            ],
            [
                'orders_id' => '2',
                'items_id' => '9',
                'quantity' => '1',
                'created_at' => '2022-11-02 00:00:00',
                'updated_at' => '2022-11-02 00:00:00',
            ],
            [
                'orders_id' => '3',
                'items_id' => '1',
                'quantity' => '1',
                'created_at' => '2022-11-03 00:00:00',
                'updated_at' => '2022-11-03 00:00:00',
            ],
            [
                'orders_id' => '3',
                'items_id' => '2',
                'quantity' => '1',
                'created_at' => '2022-11-03 00:00:00',
                'updated_at' => '2022-11-03 00:00:00',
            ],
            [
                'orders_id' => '4',
                'items_id' => '1',
                'quantity' => '1',
                'created_at' => '2022-11-10 00:00:00',
                'updated_at' => '2022-11-10 00:00:00',
            ],
            [
                'orders_id' => '5',
                'items_id' => '1',
                'quantity' => '1',
                'created_at' => '2022-11-10 00:00:00',
                'updated_at' => '2022-11-10 00:00:00',
            ],
            [
                'orders_id' => '6',
                'items_id' => '1',
                'quantity' => '1',
                'created_at' => '2022-11-10 00:00:00',
                'updated_at' => '2022-11-10 00:00:00',
            ],
            [
                'orders_id' => '7',
                'items_id' => '1',
                'quantity' => '1',
                'created_at' => '2022-11-11 00:00:00',
                'updated_at' => '2022-11-11 00:00:00',
            ],
            [
                'orders_id' => '8',
                'items_id' => '1',
                'quantity' => '1',
                'created_at' => '2022-11-20 00:00:00',
                'updated_at' => '2022-11-20 00:00:00',
            ],
            [
                'orders_id' => '9',
                'items_id' => '1',
                'quantity' => '1',
                'created_at' => '2022-11-20 00:00:00',
                'updated_at' => '2022-11-20 00:00:00',
            ],
            [
                'orders_id' => '10',
                'items_id' => '1',
                'quantity' => '1',
                'created_at' => '2022-11-20 00:00:00',
                'updated_at' => '2022-11-20 00:00:00',
            ],
            [
                'orders_id' => '11',
                'items_id' => '1',
                'quantity' => '1',
                'created_at' => '2022-11-20 00:00:00',
                'updated_at' => '2022-11-20 00:00:00',
            ],

        ]);
    }
}
