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
                'status'    => '1',
                'name'      => '山田次郎',
                'kana'      => 'ヤマダジロウ',
                'phone'     => '09000000000',
                'zip'       => '0690382',
                'pref'      => '北海道',
                'addr'      => '札幌市',
                'addr2'     => '611-144',
                'created_at' => '2022-11-01 00:00:00',
                'updated_at' => '2022-11-01 00:00:00',
            ],
            [
                'status'    => '0',
                'name'      => null,
                'kana'      => null,
                'phone'     => null,
                'zip'       => null,
                'pref'      => null,
                'addr'      => null,
                'addr2'     => null,
                'created_at' => '2022-11-02 00:00:00',
                'updated_at' => '2022-11-02 00:00:00',
            ],
            [
                'status'    => '0',
                'name'      => null,
                'kana'      => null,
                'phone'     => null,
                'zip'       => null,
                'pref'      => null,
                'addr'      => null,
                'addr2'     => null,
                'created_at' => '2022-11-03 00:00:00',
                'updated_at' => '2022-11-03 00:00:00',
            ],
            [
                'status'    => '0',
                'name'      => null,
                'kana'      => null,
                'phone'     => null,
                'zip'       => null,
                'pref'      => null,
                'addr'      => null,
                'addr2'     => null,
                'created_at' => '2022-11-10 00:00:00',
                'updated_at' => '2022-11-10 00:00:00',
            ],
            [
                'status'    => '0',
                'name'      => null,
                'kana'      => null,
                'phone'     => null,
                'zip'       => null,
                'pref'      => null,
                'addr'      => null,
                'addr2'     => null,
                'created_at' => '2022-11-10 00:00:00',
                'updated_at' => '2022-11-10 00:00:00',
            ],
            [
                'status'    => '0',
                'name'      => null,
                'kana'      => null,
                'phone'     => null,
                'zip'       => null,
                'pref'      => null,
                'addr'      => null,
                'addr2'     => null,
                'created_at' => '2022-11-10 00:00:00',
                'updated_at' => '2022-11-10 00:00:00',
            ],
            [
                'status'    => '0',
                'name'      => null,
                'kana'      => null,
                'phone'     => null,
                'zip'       => null,
                'pref'      => null,
                'addr'      => null,
                'addr2'     => null,
                'created_at' => '2022-11-11 00:00:00',
                'updated_at' => '2022-11-11 00:00:00',
            ],
            [
                'status'    => '0',
                'name'      => null,
                'kana'      => null,
                'phone'     => null,
                'zip'       => null,
                'pref'      => null,
                'addr'      => null,
                'addr2'     => null,
                'created_at' => '2022-11-20 00:00:00',
                'updated_at' => '2022-11-20 00:00:00',
            ],
            [
                'status'    => '0',
                'name'      => null,
                'kana'      => null,
                'phone'     => null,
                'zip'       => null,
                'pref'      => null,
                'addr'      => null,
                'addr2'     => null,
                'created_at' => '2022-11-20 00:00:00',
                'updated_at' => '2022-11-20 00:00:00',
            ],
            [
                'status'    => '0',
                'name'      => null,
                'kana'      => null,
                'phone'     => null,
                'zip'       => null,
                'pref'      => null,
                'addr'      => null,
                'addr2'     => null,
                'created_at' => '2022-11-20 00:00:00',
                'updated_at' => '2022-11-20 00:00:00',
            ],
            [
                'status'    => '0',
                'name'      => null,
                'kana'      => null,
                'phone'     => null,
                'zip'       => null,
                'pref'      => null,
                'addr'      => null,
                'addr2'     => null,
                'created_at' => '2022-11-20 00:00:00',
                'updated_at' => '2022-11-20 00:00:00',
            ],
        ]);
    }
}
