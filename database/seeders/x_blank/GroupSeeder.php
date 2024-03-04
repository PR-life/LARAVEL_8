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
            'name' => 'Группа 2',
            'slug' => 'group2',
        ]);
        DB::table('groups')->insert([
            'name' => 'Группа 3',
            'slug' => 'group3',
        ]);
		// можно задать в цикле FOR
    }
}
