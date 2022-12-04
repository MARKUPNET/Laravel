<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'かりんとう饅頭',
                'created_at' => '2022-10-28 00:00:00',
                'updated_at' => '2022-10-28 00:00:00',
            ],
            [
                'name' => 'ながぬま ふ輪っと',
                'created_at' => '2022-10-28 00:00:00',
                'updated_at' => '2022-10-28 00:00:00',
            ],
            [
                'name' => 'あかねいろマドレーヌ',
                'created_at' => '2022-10-28 00:00:00',
                'updated_at' => '2022-10-28 00:00:00',
            ],

        ]);
    }
}
