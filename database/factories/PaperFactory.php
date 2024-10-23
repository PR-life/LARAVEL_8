<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
//
use App\Models\Paper;
use App\Models\Category;

class PaperFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {


        $paragraphs_2 = $this->faker->paragraphs(rand(1, 2));
        $paragraphs_6 = $this->faker->paragraphs(rand(2, 6));
            
        $text = "";
        foreach ($paragraphs_2 as $para) {
            $text .= "<p>{$para}</p>";
        }; 

        $article = "";
        foreach ($paragraphs_6 as $para) {
            $article .= "<p>{$para}</p>";
        };
 


        return [
            'name' => substr($this->faker->sentence(random_int(3,5)),0,-1),
            'slug' => $this->faker->unique()->word,
            'schema_teaser' => $this->faker->randomElement($array = array (
                'default',
                'default',
                'yota',
                'poster',
                'foto',
                'video',
            )),	
            'h1' => substr($this->faker->sentence(random_int(3,5)),0,-1),
            'text' => $text,
            'article' => $article,


            'answer' => $this->faker->randomElement($array = array (
                "<p>{$this->faker->text(50)}</p>",
                "<p>{$this->faker->text(10)}</p>",
                "<p>{$this->faker->text(80)}</p>",
                null,
                null,
                null,
            )),

            'prev_h1' => substr($this->faker->sentence(random_int(2,5)),0,-1),
            'prev_h2' => substr($this->faker->sentence(random_int(2,5)),0,-1),
            'prev_p' => substr($this->faker->sentence(random_int(2,5)),0,-1),

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
