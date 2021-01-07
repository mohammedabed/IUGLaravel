<?php

namespace Database\Factories;

use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class ModelFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Model::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'OrderID' =>  $this->faker->randomNumber(),
            'ProductID' => $this->faker->randomNumber(),
            'PriceEach' =>  $this->faker->random_int(20,200),
            'RequerdDate' =>  $this->faker->dateTime,;
    }
}
