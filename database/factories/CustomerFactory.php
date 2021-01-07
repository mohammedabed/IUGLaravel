<?php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Customer::class;

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
            'Phone' => $this->faker->phoneNumber,
            'City'=>$this->faker->text,
            'Country' => random_int(20,200),
            'CreditLimt' => random_int(20,200),
        ];
    }
}
