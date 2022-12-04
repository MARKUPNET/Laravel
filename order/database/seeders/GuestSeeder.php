<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GuestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('guests')->insert([
            [
                'name'      => '山田太郎',
                'kana'      => 'ヤマダタロウ',
                'phone'     => '09000000000',
                'zip'       => '0690382',
                'pref'      => '北海道',
                'addr'      => '岩見沢市xxx',
                'addr2'     => '611-144',
                'email'     => 'xxx@xxx.jp',
                'created_at' => '2022-11-01 00:00:00',
                'updated_at' => '2022-11-01 00:00:00',
            ],
            [
                'name'      => '山田花子',
                'kana'      => 'ヤマダハナコ',
                'phone'     => '09000000000',
                'zip'       => '0690382',
                'pref'      => '北海道',
                'addr'      => '岩見沢市xxx',
                'addr2'     => '611-144',
                'email'     => 'xxx@xxx.jp',
                'created_at' => '2022-11-02 00:00:00',
                'updated_at' => '2022-11-02 00:00:00',
            ],
            [
                'name'      => 'GUEST003',
                'kana'      => 'ゲスト003',
                'phone'     => '09000000000',
                'zip'       => '0690382',
                'pref'      => '北海道',
                'addr'      => '岩見沢市xxx',
                'addr2'     => '611-144',
                'email'     => 'xxx@xxx.jp',
                'created_at' => '2022-11-03 00:00:00',
                'updated_at' => '2022-11-03 00:00:00',
            ],
            [
                'name'      => 'GUEST004',
                'kana'      => 'ゲスト004',
                'phone'     => '09000000000',
                'zip'       => '0690382',
                'pref'      => '北海道',
                'addr'      => '岩見沢市xxx',
                'addr2'     => '611-144',
                'email'     => 'xxx@xxx.jp',
                'created_at' => '2022-11-10 00:00:00',
                'updated_at' => '2022-11-10 00:00:00',
            ],
            [
                'name'      => 'GUEST005',
                'kana'      => 'ゲスト005',
                'phone'     => '09000000000',
                'zip'       => '0690382',
                'pref'      => '北海道',
                'addr'      => '岩見沢市xxx',
                'addr2'     => '611-144',
                'email'     => 'xxx@xxx.jp',
                'created_at' => '2022-11-10 00:00:00',
                'updated_at' => '2022-11-10 00:00:00',
            ],
            [
                'name'      => 'GUEST006',
                'kana'      => 'ゲスト006',
                'phone'     => '09000000000',
                'zip'       => '0690382',
                'pref'      => '北海道',
                'addr'      => '岩見沢市xxx',
                'addr2'     => '611-144',
                'email'     => 'xxx@xxx.jp',
                'created_at' => '2022-11-10 00:00:00',
                'updated_at' => '2022-11-10 00:00:00',
            ],
            [
                'name'      => 'GUEST007',
                'kana'      => 'ゲスト007',
                'phone'     => '09000000000',
                'zip'       => '0690382',
                'pref'      => '北海道',
                'addr'      => '岩見沢市xxx',
                'addr2'     => '611-144',
                'email'     => 'xxx@xxx.jp',
                'created_at' => '2022-11-11 00:00:00',
                'updated_at' => '2022-11-11 00:00:00',
            ],
            [
                'name'      => 'GUEST008',
                'kana'      => 'ゲスト008',
                'phone'     => '09000000000',
                'zip'       => '0690382',
                'pref'      => '北海道',
                'addr'      => '岩見沢市xxx',
                'addr2'     => '611-144',
                'email'     => 'xxx@xxx.jp',
                'created_at' => '2022-11-20 00:00:00',
                'updated_at' => '2022-11-20 00:00:00',
            ],
            [
                'name'      => 'GUEST009',
                'kana'      => 'ゲスト009',
                'phone'     => '09000000000',
                'zip'       => '0690382',
                'pref'      => '北海道',
                'addr'      => '岩見沢市xxx',
                'addr2'     => '611-144',
                'email'     => 'xxx@xxx.jp',
                'created_at' => '2022-11-20 00:00:00',
                'updated_at' => '2022-11-20 00:00:00',
            ],
            [
                'name'      => 'GUEST010',
                'kana'      => 'ゲスト010',
                'phone'     => '09000000000',
                'zip'       => '0690382',
                'pref'      => '北海道',
                'addr'      => '岩見沢市xxx',
                'addr2'     => '611-144',
                'email'     => 'xxx@xxx.jp',
                'created_at' => '2022-11-20 00:00:00',
                'updated_at' => '2022-11-20 00:00:00',
            ],
            [
                'name'      => 'GUEST011',
                'kana'      => 'ゲスト011',
                'phone'     => '09000000000',
                'zip'       => '0690382',
                'pref'      => '北海道',
                'addr'      => '岩見沢市xxx',
                'addr2'     => '611-144',
                'email'     => 'xxx@xxx.jp',
                'created_at' => '2022-11-20 00:00:00',
                'updated_at' => '2022-11-20 00:00:00',
            ],
        ]);
    }
}
