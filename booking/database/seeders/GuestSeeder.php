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
                'name'  => '花子',
                'phone' => '000-0000-0000',
                'email' => 'xxx@xxxx.com',
            ],
            [
                'name'  => '太郎',
                'phone' => '000-0000-0000',
                'email' => 'xxx@xxxx.com',
            ],
            [
                'name'  => '次郎',
                'phone' => '000-0000-0000',
                'email' => 'xxx@xxxx.com',
            ],
        ]);
    }
}
