<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class _Factory extends Factory
{
 
    //  php artisan make:factory PostFactory

    public function definition()
    {
        // $this->faker->word,
        // $this->faker->sentence,
		// 'name' => substr($this->faker->sentence(random_int(1,5)),0,-1);
        // $this->faker->text(300),
		// 'text' => $this->faker->paragraph(random_int(0,20), false),
		// 'name' => $this->faker->unique()->word,


		// 'name' => $this->faker->name(),
        // 'email' => $this->faker->unique()->safeEmail(),

		// 'remember_token' => Str::random(10),
		
        // $this->faker->numberBetween(0,5000),
        // 'sort_order' => rand(1, 50)
		// 'likes' => random_int(1, 50)
		
        // $slug = Str::slug('Laravel 5 Framework', '-');
		
        // faker->boolean,
		
        // 'tags' => [1,2,3],
		
		// 'aaa' => A17::get()->random()->id,
		// 'category_id' => Category::get()->random()->id,
		// *
		// на уровне запроса к БД, взять одного случайного пользователя
		// а не тянуть всех
		// 'author_id' => User::all()->random()->id,
		// 'author_id' => User::inRandomOrder()->first()->id,
		
        // 'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
		
 
        // 'email_verified_at' => now(),
		
		// 'country' => $this->faker->country(),
        // $this->faker->randomElement(['Cat1','Cat2','Cat3'])
        // 'profession' => $this->faker->randomElement($array = array (
        //        'медицинский работник в центре снижения веса',
        //        'врач акушер-гинеколог',
        //        'врач-практик',
        //        'врач общей практики'
        // )),	

        $title = trim($this->faker->sentence, ".");
		

        return [
            'name' => substr($this->faker->sentence(random_int(1,5)),0,-1),
            'text' => $this->faker->paragraph(random_int(3,20), false),
        ];

    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
