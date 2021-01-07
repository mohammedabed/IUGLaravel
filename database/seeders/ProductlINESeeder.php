<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductLine;
use Illuminate\Database\Seeder;

class ProductlINESeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(ProductLine::class, 10)->create();

    }
}
