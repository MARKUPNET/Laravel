<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TimesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('times')->insert([
            [
                'timeslot' => '10:00',
            ],
            [
                'timeslot' => '10:30',
            ],
            [
                'timeslot' => '11:00',
            ],
            [
                'timeslot' => '11:30',
            ],
            [
                'timeslot' => '12:00',
            ],
            [
                'timeslot' => '12:30',
            ],
            [
                'timeslot' => '13:00',
            ],
            [
                'timeslot' => '13:30',
            ],
            [
                'timeslot' => '14:00',
            ],
            [
                'timeslot' => '14:30',
            ],
            [
                'timeslot' => '15:00',
            ],
        ]);
    }
}
