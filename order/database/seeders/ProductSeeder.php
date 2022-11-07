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
            ],
            [
                'name' => 'ながぬま ふ輪っと',
            ],
            [
                'name' => 'あかねいろマドレーヌ',
            ],

        ]);
    }
}
