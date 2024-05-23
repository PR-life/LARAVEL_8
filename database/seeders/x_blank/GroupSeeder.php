<?php

namespace Database\Seeders\x_blank;

use Illuminate\Database\Seeder;
//
use Illuminate\Support\Facades\DB;


class GroupSeeder extends Seeder
{
    public function run()
    {
        DB::table('groups')->insert([
            'name' => 'backend',
            'slug' => 'backend',
            'order' => '60',
        ]);
        DB::table('groups')->insert([
            'name' => 'frontend',
            'slug' => 'frontend',
            'order' => '60',
        ]);
        DB::table('groups')->insert([
            'name' => 'Главная',
            'slug' => 'glavnaya',
        ]);

		// можно задать в цикле FOR
    }
}
