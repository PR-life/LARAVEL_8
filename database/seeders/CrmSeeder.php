<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
//
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CrmSeeder extends Seeder
{
    public function run()
    {
        DB::table('crm')->insert([
			'sku' => 'customers',
            'name' => 'Клиеты',
        ]);
    }
}
