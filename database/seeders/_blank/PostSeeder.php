<?php

namespace Database\Seeders\_blank;

use Illuminate\Database\Seeder;
//
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    public function run()
    {

        // DB::table('posts')->insert([
        //     'id' => '1',
        //     'sku' => 'morda',
        //     'name' => 'Главная',
        //     'slug' => 'morda',
        //     'created_at' => '2024-01-01 00:00:00',
        // ]);
     
        DB::table('posts')->insert([
            'id' => '19',
            'sku' => 'storeask',
            'name' => 'storeask',
            'slug' => 'storeask',
            'created_at' => '2024-01-01 00:00:00',
        ]);

        DB::table('posts')->insert([
            'id' => '20',
            'sku' => 'pagespeed',
            'name' => 'pagespeed ',
            'slug' => 'pagespeed',
            'created_at' => '2024-01-01 00:00:00',
        ]);


    }
}
