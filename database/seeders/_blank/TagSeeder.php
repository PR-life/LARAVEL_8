<?php

namespace Database\Seeders\_blank;

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
            'created_at' => '2024-01-01 00:00:00',
        ]);
        DB::table('tags')->insert([
            'name' => 'Тег 2',
            'slug' => 'tag2',
            'created_at' => '2024-01-01 00:00:00',
        ]);
        DB::table('tags')->insert([
            'name' => 'Тег 3',
            'slug' => 'tag3',
            'created_at' => '2024-01-01 00:00:00',
        ]);
        DB::table('tags')->insert([
            'name' => 'Тег 4',
            'slug' => 'tag4',
            'created_at' => '2024-01-01 00:00:00',
        ]);
        DB::table('tags')->insert([
            'name' => 'Тег 5',
            'slug' => 'tag5',
            'created_at' => '2024-01-01 00:00:00',
        ]);

		// можно задать в цикле FOR
    }
}
