<?php

namespace Database\Factories;

use App\Models\product;
use Illuminate\Database\Eloquent\Factories\Factory ;
use Faker\Generator as Faker;

class productFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Name' =>  $this->faker->sentence,
            'PdtDescription' =>  $this->faker->text,
            'Vendor' => $this->faker->text,
                        'MSRP' => $this->faker->text,

            'code'=>random_int(20,200),
            'QtyInStock' => random_int(20,200),
            'BuyPrice' => random_int(20,200),
            'ProductlineID' => random_int(20,200),
            'Scale' => random_int(20,200),


           // 'author_email' => $this->faker->email,
        //    'category_id' => \App\Category::all()->random(),
         //   'user_id' => \App\User::all()->random()
        ];
    }
}
/*
$factory->define(Post::class, function (Faker $faker) {
    return [
        'Name' => $faker->sentence,
        'PdtDescription' => $faker->text,
        'Vendor' => 'posts/feature_images/img.jpg',
        'code'=>strtoupper($faker->lexify('???')),
        'QtyInStock' => random_int(20,200),
        'BuyPrice' => random_int(20,200),


        'author_email' => $faker->email,
        'category_id' => \App\Category::all()->random(),
        'user_id' => \App\User::all()->random()
    ];
});
*/
