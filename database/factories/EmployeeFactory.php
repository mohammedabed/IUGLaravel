<?php

namespace Database\Factories;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Employee::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Firstneame' =>  $this->faker->sentence,
            'LastName' =>  $this->faker->text,
            'Email' => $this->faker->unique()->safeEmail,
            'JobTitel'=> $this->faker->text,
            'Officecode' => random_int(20,200),
            'BuyPrice' => random_int(20,200),
        ];
    }
}
