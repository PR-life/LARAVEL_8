<?php

namespace Database\Seeders\_blank;

use Illuminate\Database\Seeder;
//
use Illuminate\Support\Facades\DB;


class GroupSeeder extends Seeder
{
    public function run()
    {
        DB::table('groups')->insert([
            'id' => '1',
            'sku' => 'glavnaya',
            'name' => 'Главная',
            'slug' => 'glavnaya',
            'created_at' => '2024-01-01 00:00:00',
        ]);

        DB::table('groups')->insert([
            'id' => '9',
            'sku' => 'backend',
            'name' => 'BACKEND',
            'slug' => 'backend',
            'order' => '60',
            'created_at' => '2024-01-01 00:00:00',
        ]);
        DB::table('groups')->insert([
            'id' => '10',
            'sku' => 'frontend',
            'name' => 'FRONTEND',
            'slug' => 'frontend',
            'order' => '60',
            'created_at' => '2024-01-01 00:00:00',
        ]);

		// можно задать в цикле FOR
    }
}
