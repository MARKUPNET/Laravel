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
                'name'  => 'GUEST001',
                'phone' => '000-0000-0000',
                'email' => 'xxx@xxxx.com',
                'created_at' => '2022-11-10 00:00:00',
                'updated_at' => '2022-11-10 00:00:00',
            ],
            [
                'name'  => 'GUEST002',
                'phone' => '000-0000-0000',
                'email' => 'xxx@xxxx.com',
                'created_at' => '2022-11-11 00:00:00',
                'updated_at' => '2022-11-11 00:00:00',
            ],
            [
                'name'  => 'GUEST003',
                'phone' => '000-0000-0000',
                'email' => 'xxx@xxxx.com',
                'created_at' => '2022-11-14 00:00:00',
                'updated_at' => '2022-11-14 00:00:00',
            ],
            [
                'name'  => 'GUEST004',
                'phone' => '000-0000-0000',
                'email' => 'xxx@xxxx.com',
                'created_at' => '2022-11-20 00:00:00',
                'updated_at' => '2022-11-20 00:00:00',
            ],
            [
                'name'  => 'GUEST005',
                'phone' => '000-0000-0000',
                'email' => 'xxx@xxxx.com',
                'created_at' => '2022-12-01 00:00:00',
                'updated_at' => '2022-12-01 00:00:00',
            ],
            [
                'name'  => 'GUEST006',
                'phone' => '000-0000-0000',
                'email' => 'xxx@xxxx.com',
                'created_at' => '2022-12-05 00:00:00',
                'updated_at' => '2022-12-05 00:00:00',
            ],
            [
                'name'  => 'GUEST007',
                'phone' => '000-0000-0000',
                'email' => 'xxx@xxxx.com',
                'created_at' => '2022-12-05 00:00:00',
                'updated_at' => '2022-12-05 00:00:00',
            ],
            [
                'name'  => 'GUEST008',
                'phone' => '000-0000-0000',
                'email' => 'xxx@xxxx.com',
                'created_at' => '2022-12-10 00:00:00',
                'updated_at' => '2022-12-10 00:00:00',
            ],
            [
                'name'  => 'GUEST009',
                'phone' => '000-0000-0000',
                'email' => 'xxx@xxxx.com',
                'created_at' => '2022-12-18 00:00:00',
                'updated_at' => '2022-12-18 00:00:00',
            ],
            [
                'name'  => 'GUEST010',
                'phone' => '000-0000-0000',
                'email' => 'xxx@xxxx.com',
                'created_at' => '2022-12-18 00:00:00',
                'updated_at' => '2022-12-18 00:00:00',
            ],
            [
                'name'  => 'GUEST011',
                'phone' => '000-0000-0000',
                'email' => 'xxx@xxxx.com',
                'created_at' => '2022-12-19 00:00:00',
                'updated_at' => '2022-12-19 00:00:00',
            ],
        ]);
    }
}
