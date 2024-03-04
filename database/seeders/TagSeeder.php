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
            'name' => 'Супруг',
            'slug' => 'spouse',
        ]);
        DB::table('tags')->insert([
            'name' => 'Нет покупок',
            'slug' => 'notpurchase',
        ]);
        DB::table('tags')->insert([
            'name' => 'VIP',
            'slug' => 'vip',
        ]);
        // DB::table('tags')->insert([
        //     'name' => 'Тег 4',
        //     'slug' => 'tag4',
        // ]);
        // DB::table('tags')->insert([
        //     'name' => 'Тег 5',
        //     'slug' => 'tag5',
        // ]);

		// можно задать в цикле FOR
    }
}
