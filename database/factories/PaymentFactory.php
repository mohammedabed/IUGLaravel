<?php

namespace Database\Factories;

use App\Models\Payment;
use Illuminate\Database\Eloquent\Factories\Factory;

class PaymentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Payment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'CustomerID' =>  random_int(20,200),
            'PaymentDate' =>  $this->faker->dateTime,
            'amount' => random_int(20,200),
         //   'CheckNum'=>strtoupper( $this->faker->lexify('???')),

        ];
    }
}
