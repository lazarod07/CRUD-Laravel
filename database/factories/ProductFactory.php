<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $count = Category::count();

        return [

            'name' => $this->faker->text(20),

            'state' => 'Activo',

            'value' => $this->faker->numerify('#####'),

            'number' => $this->faker->numerify('##'),

            'category_id' => $this->faker->numberBetween(1, $count),
        ];
    }
}
