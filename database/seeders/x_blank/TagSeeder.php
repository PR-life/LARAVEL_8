<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
//
use Illuminate\Support\Facades\DB;


class TagSeeder extends Seeder
{
    public function run()
    {

        DB::table('tags')->insert([
            'name' => 'Тег 1',
            'slug' => 'tag1',
        ]);
        DB::table('tags')->insert([
            'name' => 'Тег 2',
            'slug' => 'tag2',
        ]);
        DB::table('tags')->insert([
            'name' => 'Тег 3',
            'slug' => 'tag3',
        ]);
        DB::table('tags')->insert([
            'name' => 'Тег 4',
            'slug' => 'tag4',
        ]);
        DB::table('tags')->insert([
            'name' => 'Тег 5',
            'slug' => 'tag5',
        ]);

		// можно задать в цикле FOR
    }
}
