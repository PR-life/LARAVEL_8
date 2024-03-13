<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
//
use Illuminate\Support\Facades\DB;


class GroupSeeder extends Seeder
{
    public function run()
    {

        DB::table('groups')->insert([
            'name' => 'Главная',
            'slug' => 'main',
        ]);
        DB::table('groups')->insert([
            'name' => 'Цены',
            'slug' => 'price',
        ]);
        DB::table('groups')->insert([
            'name' => 'Каталог',
            'slug' => 'catalog',
        ]);
        DB::table('groups')->insert([
            'name' => 'Клиенты',
            'slug' => 'customers',
        ]);
		// можно задать в цикле FOR
    }
}
