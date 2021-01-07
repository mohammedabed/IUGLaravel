<?php

namespace Database\Seeders;

use App\Models\Order_Product;
use App\Models\Product;
use Illuminate\Database\Seeder;

class orderProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Order_Product::class, 10)->create();

    }
}
