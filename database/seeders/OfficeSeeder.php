<?php

namespace Database\Seeders;

use App\Models\Office;
use App\Models\Product;
use Illuminate\Database\Seeder;

class OfficeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Office::class, 10)->create();

    }
}
