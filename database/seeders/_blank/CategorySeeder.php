<?php

namespace Database\Seeders\_blank;

use Illuminate\Database\Seeder;
//
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    public function run()
    {

        DB::table('categories')->insert([
            'name' => 'Категория 1',
            'slug' => 'cat1',
        ]);

        DB::table('categories')->insert([
            'name' => 'Категория 2',
            'slug' => 'cat2',
        ]);


        DB::table('categories')->insert([
            'name' => 'Категория 3',
            'slug' => 'cat3',
        ]);

		// можно задать в цикле FOR
    }
}
