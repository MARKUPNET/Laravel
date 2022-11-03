<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bookings')->insert([
            [
                'date' => '2022-11-01',
                'time_id' => '1',
                'guest_id' => '1',
                'plan_id' => '1',
                'person' => '1',
                'note' => 'テキストテキストテキスト',
            ],
            [
                'date' => '2022-11-02',
                'time_id' => '2',
                'guest_id' => '2',
                'plan_id' => '2',
                'person' => '2',
                'note' => 'テキストテキストテキスト',
            ],
            [
                'date' => '2022-11-03',
                'time_id' => '3',
                'guest_id' => '3',
                'plan_id' => '3',
                'person' => '3',
                'note' => 'テキストテキストテキスト',
            ],
            [
                'date' => '2022-11-08',
                'time_id' => '4',
                'guest_id' => '1',
                'plan_id' => '1',
                'person' => '1',
                'note' => 'テキストテキストテキスト',
            ],
            [
                'date' => '2022-11-09',
                'time_id' => '5',
                'guest_id' => '2',
                'plan_id' => '2',
                'person' => '2',
                'note' => 'テキストテキストテキスト',
            ],
            [
                'date' => '2022-11-10',
                'time_id' => '6',
                'guest_id' => '3',
                'plan_id' => '3',
                'person' => '3',
                'note' => 'テキストテキストテキスト',
            ],
            [
                'date' => '2022-11-27',
                'time_id' => '7',
                'guest_id' => '1',
                'plan_id' => '1',
                'person' => '1',
                'note' => 'テキストテキストテキスト',
            ],
            [
                'date' => '2022-11-17',
                'time_id' => '8',
                'guest_id' => '2',
                'plan_id' => '2',
                'person' => '2',
                'note' => 'テキストテキストテキスト',
            ],
            [
                'date' => '2022-11-18',
                'time_id' => '9',
                'guest_id' => '3',
                'plan_id' => '3',
                'person' => '3',
                'note' => 'テキストテキストテキスト',
            ],
            [
                'date' => '2022-11-19',
                'time_id' => '10',
                'guest_id' => '1',
                'plan_id' => '1',
                'person' => '1',
                'note' => 'テキストテキストテキスト',
            ],
        ]);
    }
}
