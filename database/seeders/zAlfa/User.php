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
            'avatar' => '/images-0/hello.jpg',
            'email' => 'stepanov-mt12@yandex.ru',
            'password' => '$2y$10$hDq6XTwH4cNyDq4BQW8KY.r9M/sbCNXwh3VcMkwX6eVin9QZT4yKS',
			'remember_token' => Str::random(10),
            'email_verified_at' => '2022-06-29 06:12:25',
        ]);

    	DB::table('users')->insert([
			'role' => '10',
            'name' => 'Андрей',
            'avatar' => '/images/z_imago/ava/ava_alfa.png',
            'email' => 'otvetalfamed@yandex.ru',
            'password' => '$2y$10$Khu5yqcYIAMRR2HC0uK1TebmjVNkKcIPeECszvxaeQTAttT.LtGbu', // imago2023
            // 'password' => '$2y$10$nYKUGPx7MkH3oRB60U5l3OIadUhC9nI4zDOveInd5i1H.KveiHIbG',
			'remember_token' => Str::random(10),
            'email_verified_at' => '2022-06-29 06:12:25',
			//
			'nickname' => 'ООО Альфа-Мед',
			'user_par_1' => 'Научно-производственная база диагностических приборов',
        ]);

    	DB::table('users')->insert([
			'role' => '10',
            'name' => 'Сенситив Имаго',
            'avatar' => '/images/z_imago/ava/ava_imago.jpg',
            'email' => 'integrator@sensitiv-imago.ru',
            'password' => '$2y$10$Khu5yqcYIAMRR2HC0uK1TebmjVNkKcIPeECszvxaeQTAttT.LtGbu', // imago2023
            // 'password' => '$2y$10$nYKUGPx7MkH3oRB60U5l3OIadUhC9nI4zDOveInd5i1H.KveiHIbG',
			'remember_token' => Str::random(10),
            'email_verified_at' => '2022-06-29 06:12:25',
			//
			'user_par_1' => 'системный интегратор',
        ]);

        DB::table('users')->insert([
			'role' => '20',
            'name' => 'Светлана',
            'email' => '532523532@sensitiv-imago.ru',
            'password' => '$2y$10$Khu5yqcYIAMRR2HC0uK1TebmjVNkKcIPeECszvxaeQTAttT.LtGbu',
			'remember_token' => Str::random(10),
            'email_verified_at' => '2022-06-29 06:12:25',
			//
			'user_par_1' => ' сотрудник ООО Альфа-Мед',
        ]);

        DB::table('users')->insert([
			'role' => '30',
            'name' => 'Аккаунт зарегистрированного пользователя',
            'email' => 'e001@sensitiv-imago.ru',
            'password' => '$2y$10$Khu5yqcYIAMRR2HC0uK1TebmjVNkKcIPeECszvxaeQTAttT.LtGbu',
			'remember_token' => Str::random(10),
            'email_verified_at' => '2022-06-29 06:12:25',
			//
        ]);
        DB::table('users')->insert([
			'role' => '10',
            'name' => 'Аркадий',
            'email' => 'arkadiihotin@mail.ru',
            'password' => '$2y$10$PI/k4QcZhbkunDaCGaWm7.wRkUad5Hp2AIgyAZJoUz8RwvtUElBpi',
			'remember_token' => Str::random(10),
            'email_verified_at' => '2022-06-29 06:12:25',
			//
        ]);

		// можно задать в цикле FOR
    }
}
