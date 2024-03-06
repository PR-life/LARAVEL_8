<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

////
use Illuminate\Support\Arr;

use App\Models\User;
use App\Models\Category;
use App\Models\Tag;
use App\Models\Group;
use App\Models\Post;
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
			CategorySeeder::class,
			TagSeeder::class,
			// GroupSeeder::class,
			// PostSeeder::class
		]);

		$tags = Tag::all();
		$categories = Category::all();
		$groups = Group::all();

		// Faq::factory()->count(15)->create();
		// Sms::factory()->count(100)->create();
		$faces = Face::factory()->count(10)->create();
		// Paper::factory()->count(140)->create();
		// Face::factory()->count(238)->create();

		// Create a sample input array.




        foreach($faces as $_face) {
            $i = random_int(0,1);
            $tags_id = $tags->random($i)->pluck('id'); // метод pluck вернет массив из id таблицы Tag
            $_face->tags()->attach($tags_id);


            $arr = [
                null,
                null,
                null,
                null,
                Face::get()->random()->id
            ];

            $_face->face_id = Arr::random($arr); 
			$_face->save();

        }



    }
}
