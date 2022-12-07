<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'demoID',
                'email' => 'demo@demo.jp',
                'email_verified_at' => null,
                'password' => '$2y$10$Zq8kl2mRSglnQIgxV5Q1OOIGBoY8UV00s8wcgPnncu0Rqj4VSUf4S',
                'remember_token' => null,
            ],

        ]);
    }
}
