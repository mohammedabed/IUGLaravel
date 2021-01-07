<?php

namespace Database\Seeders;

use App\Models\Employee;
use App\Models\Product;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Employee::class, 10)->create();

    }
}
