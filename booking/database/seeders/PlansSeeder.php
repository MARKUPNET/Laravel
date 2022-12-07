<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlansSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('plans')->insert([
            [
                'name'  => 'プランA',
                'price' => '1500',
                'note'  => 'テキストテキスト',
                'created_at' => '2022-11-01 00:00:00',
                'updated_at' => '2022-11-01 00:00:00',
            ],
            [
                'name'  => 'プランB',
                'price' => '2000',
                'note'  => 'テキストテキスト',
                'created_at' => '2022-11-01 00:00:00',
                'updated_at' => '2022-11-01 00:00:00',
            ],
            [
                'name'  => 'プランC',
                'price' => '3500',
                'note'  => 'テキストテキスト',
                'created_at' => '2022-11-01 00:00:00',
                'updated_at' => '2022-11-01 00:00:00',
            ],
        ]);
    }
}
