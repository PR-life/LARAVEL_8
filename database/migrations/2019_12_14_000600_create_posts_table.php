<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   

        Schema::create('posts', function (Blueprint $table) {
            $table->id();
			$table->string('sku')->unique()->nullable();
	
            $table->string('name');
			$table->string('slug')->unique();

            $table->string('mockup')->nullable();
            $table->string('schema')->nullable();
            $table->string('schema_teaser')->nullable();
            $table->string('css')->nullable();

			$table->string('h1')->nullable();
			$table->text('intro')->nullable();
            $table->text('text')->nullable();
			
			//Prev
			$table->string('bread_name')->nullable();
			
			$table->string('prev_h1')->nullable();
			$table->string('prev_h2')->nullable();
			$table->string('prev_p')->nullable();
			$table->string('prev_image')->nullable();
			$table->string('prev_url')->nullable();


			//Media
			// $table->string('img')->nullable();
			// $table->string('prev_image')->nullable();
			// $table->string('main_image')->nullable();

            $table->text('note')->nullable();

            //
            $table->unsignedBigInteger('post_id')->nullable();
            $table->foreign('post_id')->references('id')->on('posts');

            //
			$table->foreignId('user_id')
				->default('1')
				->references('id')
				->on('users')
				->cascadeOnDelete();

            $table->foreignId('group_id')
                ->nullable()
                ->references('id')
                ->on('groups');

            $table->foreignId('tag_id')
                ->nullable()
                ->references('id')
                ->on('tags');

			$table->unsignedBigInteger('category_id')->nullable(); // ИМЯ ед. ч. -- эта тбл. и тбл. на какую ссылаемся + суффикс 
            $table->foreign('category_id')->references('id')->on('categories');


            //
            $table->unsignedInteger('mafia')->nullable();

			$table->unsignedInteger('order')->default(50);
            $table->unsignedInteger('status')->default(1);
            $table->unsignedInteger('views')->default('1');
            $table->unsignedInteger('pin')->nullable();
            $table->unsignedInteger('featured')->default('0');
            $table->unsignedInteger('published')->default(1);
			

			//
			$table->string('canonical')->nullable();
			$table->string('title')->nullable();
			$table->string('description')->nullable();
			$table->string('keywords')->nullable();


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
        Schema::dropIfExists('posts');
    }
}
