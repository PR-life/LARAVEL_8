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
            'name' => 'Клиеты',
            'slug' => 'customers',
        ]);

        DB::table('categories')->insert([
            'name' => 'В архиве',
            'slug' => 'archive',
        ]);

        DB::table('categories')->insert([
            'name' => 'Дети',
            'slug' => 'children',
        ]);


        // DB::table('categories')->insert([
        //     'name' => 'Категория 3',
        //     'slug' => 'cat3',
        // ]);

		// можно задать в цикле FOR
    }
}
