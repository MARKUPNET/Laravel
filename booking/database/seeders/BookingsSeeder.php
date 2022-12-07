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
                'date' => '2022-11-10',
                'time_id' => '1',
                'guest_id' => '1',
                'plan_id' => '1',
                'person' => '1',
                'note' => 'テキストテキストテキスト',
                'created_at' => '2022-11-10 00:00:00',
                'updated_at' => '2022-11-10 00:00:00',
            ],
            [
                'date' => '2022-11-11',
                'time_id' => '2',
                'guest_id' => '2',
                'plan_id' => '2',
                'person' => '2',
                'note' => 'テキストテキストテキスト',
                'created_at' => '2022-11-11 00:00:00',
                'updated_at' => '2022-11-11 00:00:00',
            ],
            [
                'date' => '2022-11-14',
                'time_id' => '3',
                'guest_id' => '3',
                'plan_id' => '3',
                'person' => '3',
                'note' => 'テキストテキストテキスト',
                'created_at' => '2022-11-14 00:00:00',
                'updated_at' => '2022-11-14 00:00:00',
            ],
            [
                'date' => '2022-11-20',
                'time_id' => '4',
                'guest_id' => '4',
                'plan_id' => '1',
                'person' => '1',
                'note' => 'テキストテキストテキスト',
                'created_at' => '2022-11-20 00:00:00',
                'updated_at' => '2022-11-20 00:00:00',
            ],
            [
                'date' => '2022-12-01',
                'time_id' => '5',
                'guest_id' => '5',
                'plan_id' => '2',
                'person' => '2',
                'note' => 'テキストテキストテキスト',
                'created_at' => '2022-12-01 00:00:00',
                'updated_at' => '2022-12-01 00:00:00',
            ],
            [
                'date' => '2022-12-05',
                'time_id' => '6',
                'guest_id' => '6',
                'plan_id' => '3',
                'person' => '3',
                'note' => 'テキストテキストテキスト',
                'created_at' => '2022-12-05 00:00:00',
                'updated_at' => '2022-12-05 00:00:00',
            ],
            [
                'date' => '2022-12-05',
                'time_id' => '7',
                'guest_id' => '7',
                'plan_id' => '1',
                'person' => '1',
                'note' => 'テキストテキストテキスト',
                'created_at' => '2022-12-05 00:00:00',
                'updated_at' => '2022-12-05 00:00:00',
            ],
            [
                'date' => '2022-12-10',
                'time_id' => '8',
                'guest_id' => '8',
                'plan_id' => '2',
                'person' => '2',
                'note' => 'テキストテキストテキスト',
                'created_at' => '2022-12-10 00:00:00',
                'updated_at' => '2022-12-10 00:00:00',
            ],
            [
                'date' => '2022-12-18',
                'time_id' => '9',
                'guest_id' => '9',
                'plan_id' => '3',
                'person' => '3',
                'note' => 'テキストテキストテキスト',
                'created_at' => '2022-12-18 00:00:00',
                'updated_at' => '2022-12-18 00:00:00',
            ],
            [
                'date' => '2022-12-18',
                'time_id' => '10',
                'guest_id' => '10',
                'plan_id' => '1',
                'person' => '1',
                'note' => 'テキストテキストテキスト',
                'created_at' => '2022-12-18 00:00:00',
                'updated_at' => '2022-12-18 00:00:00',
            ],
            [
                'date' => '2022-12-19',
                'time_id' => '11',
                'guest_id' => '11',
                'plan_id' => '1',
                'person' => '1',
                'note' => 'テキストテキストテキスト',
                'created_at' => '2022-12-19 00:00:00',
                'updated_at' => '2022-12-19 00:00:00',
            ],
        ]);
    }
}
