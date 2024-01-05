<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
//
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    public function run()
    {

        DB::table('categories')->insert([
            'name' => 'Про диагностику',
            'slug' => 'imago',
        ]);

        DB::table('categories')->insert([
            'name' => 'Оборудование',
            'slug' => 'equipment',
        ]);


        DB::table('categories')->insert([
            'name' => 'Про обучение',
            'slug' => 'courses',
        ]);


        DB::table('categories')->insert([
            'name' => 'Новости',
            'slug' => 'news',
        ]);

		// можно задать в цикле FOR
    }
}
