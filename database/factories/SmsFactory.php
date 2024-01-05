<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
//
use App\Models\Sms;

class SmsFactory extends Factory
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
            'contact' => $this->faker->randomElement($array = array (
                $this->faker->unique()->safeEmail(),
                $this->faker->unique()->phoneNumber(),
            )),

            'email' => $this->faker->unique()->safeEmail(),
            'phone' => $this->faker->unique()->phoneNumber(),
            'whatsapp' => $this->faker->unique()->phoneNumber(),
            'telegram' => $this->faker->unique()->word,
            'viber' => $this->faker->unique()->phoneNumber(),

            'country' => $this->faker->country(),
            'city' => $this->faker->city(),

            'sms' => $this->faker->text(300),
            'answer' => $this->faker->text(300),
            'answer_user_name' => $this->faker->name(),
            
            'go_mod_talk' => $this->faker->randomElement($array = array (
                '0',
                '0',
                '0',
                '1',
            )),

            'type' => $this->faker->randomElement($array = array (
                'conversion',
                'conversion',
                'conversion',
                'lead',
            )),
            'label' => $this->faker->randomElement($array = array (
                'email',
                'email',
                'callback',
                'callback',
                'callback',
                'ask',
            )),

            'featured' => $this->faker->randomElement($array = array (
                '0',
                '0',
                '0',
                '1',
            )),
            'published' => '1',
            'mafia' => '1',
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
