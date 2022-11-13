<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call(UsersSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(GuestSeeder::class);
        $this->call(NoshiSeeder::class);
        $this->call(DeliverySeeder::class);
        $this->call(ItemSeeder::class);
        $this->call(OrderSeeder::class);
        $this->call(QuantitySeeder::class);

    }
}
