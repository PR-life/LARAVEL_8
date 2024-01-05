<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
//
use App\Models\Category;

class FaqFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => substr($this->faker->sentence(random_int(3,5)),0,-1),
            'text' => $this->faker->text(300),
            'filter_par_1' => $this->faker->randomElement($array = array (
                'imago',
                'equipment',
                'courses',
            )),	
            'category_id' => Category::get()->random()->id,
            'featured' => $this->faker->randomElement($array = array (
                '0',
                '0',
                '0',
                '1',
            )),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    // public function unverified()
    // {
    //     return $this->state(function (array $attributes) {
    //         return [
    //             'email_verified_at' => null,
    //         ];
    //     });
    // }
}
