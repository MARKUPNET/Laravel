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
                'status'    => '1',
                'type'      => 'お歳暮',
                'color'     => '紅白',
                'position'  => '内のし（包装紙の内にのしを敷く）',
                'name'      => '山田太郎',
                'note'      => 'ここにテキストを入力します。',
                'created_at' => '2022-11-01 00:00:00',
                'updated_at' => '2022-11-01 00:00:00',
            ],
            [
                'status'    => '0',
                'type'      => null,
                'color'     => null,
                'position'  => null,
                'name'      => null,
                'note'      => null,
                'created_at' => '2022-11-02 00:00:00',
                'updated_at' => '2022-11-02 00:00:00',
            ],
            [
                'status'    => '0',
                'type'      => null,
                'color'     => null,
                'position'  => null,
                'name'      => null,
                'note'      => null,
                'created_at' => '2022-11-03 00:00:00',
                'updated_at' => '2022-11-03 00:00:00',
            ],
            [
                'status'    => '0',
                'type'      => null,
                'color'     => null,
                'position'  => null,
                'name'      => null,
                'note'      => null,
                'created_at' => '2022-11-10 00:00:00',
                'updated_at' => '2022-11-10 00:00:00',
            ],
            [
                'status'    => '0',
                'type'      => null,
                'color'     => null,
                'position'  => null,
                'name'      => null,
                'note'      => null,
                'created_at' => '2022-11-10 00:00:00',
                'updated_at' => '2022-11-10 00:00:00',
            ],
            [
                'status'    => '0',
                'type'      => null,
                'color'     => null,
                'position'  => null,
                'name'      => null,
                'note'      => null,
                'created_at' => '2022-11-10 00:00:00',
                'updated_at' => '2022-11-10 00:00:00',
            ],
            [
                'status'    => '0',
                'type'      => null,
                'color'     => null,
                'position'  => null,
                'name'      => null,
                'note'      => null,
                'created_at' => '2022-11-11 00:00:00',
                'updated_at' => '2022-11-1 00:00:00',
            ],
            [
                'status'    => '0',
                'type'      => null,
                'color'     => null,
                'position'  => null,
                'name'      => null,
                'note'      => null,
                'created_at' => '2022-11-20 00:00:00',
                'updated_at' => '2022-11-20 00:00:00',
            ],
            [
                'status'    => '0',
                'type'      => null,
                'color'     => null,
                'position'  => null,
                'name'      => null,
                'note'      => null,
                'created_at' => '2022-11-20 00:00:00',
                'updated_at' => '2022-11-20 00:00:00',
            ],
            [
                'status'    => '0',
                'type'      => null,
                'color'     => null,
                'position'  => null,
                'name'      => null,
                'note'      => null,
                'created_at' => '2022-11-20 00:00:00',
                'updated_at' => '2022-11-20 00:00:00',
            ],
            [
                'status'    => '0',
                'type'      => null,
                'color'     => null,
                'position'  => null,
                'name'      => null,
                'note'      => null,
                'created_at' => '2022-11-20 00:00:00',
                'updated_at' => '2022-11-20 00:00:00',
            ],
        ]);
    }
}
