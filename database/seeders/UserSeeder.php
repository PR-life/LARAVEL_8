<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
//
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
			'role' => '1',
            'name' => 'Алексей',
            'rank' => 'Full-stack разработка',
            'avatar' => '/images-0/ava/hello.jpg',
            'email' => 'stepanov-mt12@yandex.ru',
            'password' => '$2y$10$hDq6XTwH4cNyDq4BQW8KY.r9M/sbCNXwh3VcMkwX6eVin9QZT4yKS',
			'remember_token' => Str::random(10),
            'email_verified_at' => '2022-06-29 06:12:25',
        ]);
    }
}
