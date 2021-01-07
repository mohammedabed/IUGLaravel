<?php

namespace Database\Seeders;

use App\Models\Product;
//use App\Product;
use Illuminate\Database\Seeder;

class productseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Product::class, 10)->create();

    }
}
