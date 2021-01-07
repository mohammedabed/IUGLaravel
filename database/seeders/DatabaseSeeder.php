<?php

namespace Database\Seeders;

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
         \App\Models\User::factory(10)->create();
        \App\Models\Product::factory(10)->create();
        \App\Models\Payment::factory(10)->create();
        \App\Models\ProductLine::factory(10)->create();
        \App\Models\Office::factory(10)->create();
        \App\Models\Order::factory(10)->create();
        \App\Models\Customer::factory(10)->create();
        \App\Models\Order_Product::factory(10)->create();


    }
}
