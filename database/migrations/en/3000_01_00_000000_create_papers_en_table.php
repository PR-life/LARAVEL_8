<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePapersEnTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('papers_en', function (Blueprint $table) {
            $table->id();
            $table->string('sku')->unique()->nullable();

            $table->string('name')->nullable();
			$table->string('slug')->unique();
			
            $table->string('schema')->nullable();
            $table->string('schema_teaser')->nullable();
            $table->string('css')->nullable();
            // $table->string('filter_par_1')->nullable();

            $table->string('h1')->nullable();
            $table->text('text')->nullable();
            $table->text('article')->nullable();
            $table->text('answer')->nullable();
            $table->string('answer_user_name')->nullable();

			//Prev
			$table->string('prev_h1')->nullable();
			$table->string('prev_h2')->nullable();
			$table->string('prev_p')->nullable();
			$table->string('prev_image')->nullable();
            
			//Media
			$table->string('foto_count_teaser')->nullable();
			$table->string('foto_count_full')->nullable();
            $table->string('url_foto')->nullable();
            $table->string('url_video')->nullable();

            //Share
            $table->string('link_media')->nullable();
            $table->string('link_media_name')->nullable();

			//Demon
            $table->string('demon_name')->nullable();
            $table->string('demon_par_1')->nullable();
            $table->string('demon_par_2')->nullable();
            $table->string('demon_par_3')->nullable();

 

			$table->unsignedInteger('order')->default(50);
            $table->unsignedInteger('status')->default(1);
            $table->unsignedInteger('views')->default('1');
            $table->unsignedInteger('featured')->default('0');
            $table->unsignedInteger('published')->default('0');

            $table->unsignedInteger('mafia')->nullable();

			//


			$table->foreignId('user_id')
				->default('1')
				->references('id')
				->on('users')
				->cascadeOnDelete();

			// $table->unsignedBigInteger('category_sku')->nullable();
			$table->unsignedBigInteger('category_id')->nullable();          
            $table->index('category_id', 'paper_en_category_idx');
            $table->foreign('category_id', 'paper_en_category_fk')->on('categories')->references('id');
       

			//
			$table->string('title')->nullable();
			$table->string('description')->nullable();
			$table->string('keywords')->nullable();
			$table->string('canonical')->nullable();


			//
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('papers_en');
    }
}
