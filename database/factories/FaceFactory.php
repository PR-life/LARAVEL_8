<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
//
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
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'public_contact' => $this->faker->randomElement($array = array (
                $this->faker->unique()->safeEmail(),
                $this->faker->unique()->phoneNumber(),
            )),
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
            'country' => $this->faker->country(),
            'city' => $this->faker->city(),
            'location' => $this->faker->text(20),
            'achievement' => $this->faker->text(150),
            'text' => $this->faker->text(1400),
            'year_using_device' => $this->faker->randomElement($array = array (
                '2009',
                '2010',
                '2011',
                '2012',
                '2012',
                '2013',
                '2014',
                '2015',
                '2016',
                '2016',
                '2017',
                '2018',
                '2019',
                '2020',
                '2021',
                '2022',
                '2023',
            )),
            'apk' => $this->faker->randomElement($array = array (
                'imago',
                'audit',
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
