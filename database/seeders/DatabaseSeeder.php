<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
////
// use App\Models\User;
// use App\Models\Post;
use App\Models\Faq;
use App\Models\Sms;
use App\Models\Face;
use App\Models\Paper;

class DatabaseSeeder extends Seeder
{
    
	// php artisan migrate:refresh --seed
	// php artisan db:seed
	// php artisan excel:import

	// php artisan db:seed --class=PaperSeeder

    public function run()
    {
        // \App\Models\User::factory(10)->create();


		$this->call([
			UserSeeder::class,
			// CategorySeeder::class,
			// PostSeeder::class
		]);

		// Faq::factory()->count(15)->create();
		// Sms::factory()->count(100)->create();
		// Face::factory()->count(20)->create();
		// Paper::factory()->count(140)->create();

    }
}
