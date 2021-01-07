<?php

namespace Database\Factories;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;


class OrderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Order::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'OrderDate' =>  $this->faker->dateTime,
            'RequerdDate' => $this->faker->dateTime,
            'OrderDate' =>  $this->faker->dateTime,
            'RequerdDate' =>  $this->faker->dateTime,
        ];
    }
}
