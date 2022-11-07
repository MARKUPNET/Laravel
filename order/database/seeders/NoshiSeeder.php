<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NoshiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('noshis')->insert([
            [
                'orders_id' => '1',
                'status'    => '1',
                'type'      => 'お歳暮',
                'color'     => '紅白',
                'position'  => '内のし（包装紙の内にのしを敷く）',
                'name'      => '山田太郎',
                'note'      => 'ここにテキストを入力します。',
            ],

        ]);
    }
}
