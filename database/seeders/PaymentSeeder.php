<?php

namespace Database\Seeders;

use App\Models\Payment;
use App\Models\Product;
use Illuminate\Database\Seeder;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Payment::class, 10)->create();

    }
}
