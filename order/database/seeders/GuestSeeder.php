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
                'order_id'  => '1',
                'name'      => '山田太郎',
                'kana'      => 'ヤマダタロウ',
                'phone'     => '09000000000',
                'zip'       => '0690382',
                'pref'      => '北海道',
                'addr1'     => '岩見沢市幌向北2条1丁目',
                'addr2'     => '611-144',
                'email'     => 'first.things.first0417@markupnet.jp',
            ],

        ]);
    }
}
