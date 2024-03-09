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
            'avatar' => '/images/ava/admin/hello.jpg',
            'email' => 'stepanov-mt12@yandex.ru',
            'password' => '$2y$10$hDq6XTwH4cNyDq4BQW8KY.r9M/sbCNXwh3VcMkwX6eVin9QZT4yKS',
			'remember_token' => Str::random(10),
            'email_verified_at' => '2022-06-29 06:12:25',
        ]);
    	// DB::table('users')->insert([
		// 	'role' => '10',
        //     'name' => 'Аркадий',
        //     'avatar' => '/images/ava/admin/hotin.jpg',
        //     'email' => 'arkadiihotin@mail.ru',
        //     'password' => '$2y$10$Khu5yqcYIAMRR2HC0uK1TebmjVNkKcIPeECszvxaeQTAttT.LtGbu', // imago2023
        //     // 'password' => '$2y$10$nYKUGPx7MkH3oRB60U5l3OIadUhC9nI4zDOveInd5i1H.KveiHIbG',
		// 	'remember_token' => Str::random(10),
        //     'email_verified_at' => '2022-06-29 06:12:25',
		// 	//
		// 	'nickname' => 'ООО «ФРАТЕЛЛИ САРТИ»',
        // ]);
    }
}
