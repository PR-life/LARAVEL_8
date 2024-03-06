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
            'sku' => 'main',
        ]);
        DB::table('groups')->insert([
            'name' => 'Цены',
            'sku' => 'price',
        ]);
        DB::table('groups')->insert([
            'name' => 'Каталог',
            'sku' => 'catalog',
        ]);
        DB::table('groups')->insert([
            'name' => 'Клиенты',
            'sku' => 'customers',
        ]);
		// можно задать в цикле FOR
    }
}
