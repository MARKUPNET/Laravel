<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DeliverySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('deliveries')->insert([
            [
                'orders_id' => '1',
                'status'    => '1',
                'name'      => '山田次郎',
                'kana'      => 'ヤマダジロウ',
                'phone'     => '09000000000',
                'zip'       => '0690382',
                'pref'      => '北海道',
                'addr'      => '札幌市',
                'addr2'     => '611-144',
            ],

        ]);
    }
}
