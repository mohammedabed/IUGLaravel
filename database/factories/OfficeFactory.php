<?php

namespace Database\Factories;

use App\Models\Office;
use Illuminate\Database\Eloquent\Factories\Factory;

class OfficeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Office::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Phone' =>  $this->faker->randomNumber(),
            'Address1' =>  $this->faker->text,
            'Address2' => $this->faker->text,
            'City' => $this->faker->text,

            'State'=>$this->faker->text,
            'Country' => $this->faker->text,
            'Territory' => $this->faker->text,
            'PostCode' =>  $this->faker->postcode,
        ];
    }
}
