<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
//
use App\Models\Category;
use App\Models\Tag;
use App\Models\Face;

class FaceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->firstName(),
            'surname' => $this->faker->firstName(),
            'patronymic' => $this->faker->lastName(),
            
            'birthday' => $this->faker->dateTimeBetween('-65 years', '-18 years'),

            'email' => $this->faker->randomElement($array = array (
                $this->faker->unique()->safeEmail(),
                // $this->faker->unique()->safeEmail(),
                // $this->faker->unique()->safeEmail(),
                // $this->faker->unique()->safeEmail(),
                // null,
            )),

            'phone' => $this->faker->randomElement($array = array (
                $this->faker->tollFreePhoneNumber(),
                // $this->faker->phoneNumber(),
                // $this->faker->phoneNumber(),
                // null,
            )),

            'whatsapp' => $this->faker->randomElement($array = array (
                $this->faker->tollFreePhoneNumber(),
                // null,
                // null,
                // null,
            )),


            'telegram' => $this->faker->randomElement($array = array (
                $this->faker->word(),
                // null,
                // null,
                // null,
            )),

            'viber' => $this->faker->randomElement($array = array (
                $this->faker->tollFreePhoneNumber(),
                // null,
                // null,
                // null,
            )),

            'public_contact' => $this->faker->randomElement($array = array (
                'email',
                'email',
                'phone',
                'phone',
                'phone',
                'phone',
                'whatsapp',
                'telegram',
                'viber',
            )),

            'country' => $this->faker->randomElement($array = array (
                'Россия',
                'Россия',
                'Россия',
                'Россия',
                'Армения',
                'Беларусь',
                $this->faker->country(),
            )),

            'city' => $this->faker->randomElement($array = array (
                'Mосква',
                'СПБ',
                'Самара',
                'Mосква',
                'Mосква',
                'Сочи',
                'Mосква',
                'Mосква',
                $this->faker->city()
            )),

            'area' => $this->faker->address(),


            'estimation' => $this->faker->randomElement($array = array (
                '4.5',
                '4.4',
                '4.6',
                '4.8',
                '4.9',
                '4.0',
                '4.1',
                null,
                null,

            )),
            'reviews' => $this->faker->randomElement($array = array (
                null,
                null,
                null,
                '1',
                '1',
                '4',
                '8',
                '1',
                '2',
                '3',
            )),
            'posts' => $this->faker->randomElement($array = array (
                null,
                null,
                null,
                '1',
                '1',
                '4',
                '2',
                '1',
                '2',
                '3',
            )),

            'tag_id' => $this->faker->randomElement($array = array (
                null,
                null,
                null,
                null,
                null,
                null,
                Tag::get()->random()->id,
            )),

            'category_id' => $this->faker->randomElement($array = array (
                null,
                null,
                null,
                null,
                null,
                null,
                Category::get()->random()->id,
            )),




            

            'user_id' => '1',
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
