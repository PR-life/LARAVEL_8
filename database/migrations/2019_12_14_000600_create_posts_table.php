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

			$table->string('h1')->nullable();
			$table->text('intro')->nullable();
            $table->text('text')->nullable();
			
			//Prev
			$table->string('bread_name')->nullable();
			
			$table->string('prev_h1')->nullable();
			$table->string('prev_h2')->nullable();
			$table->string('prev_p')->nullable();
			$table->string('prev_image')->nullable();


			//Media
			// $table->string('img')->nullable();
			// $table->string('prev_image')->nullable();
			// $table->string('main_image')->nullable();

			$table->text('knot_1')->nullable();


			$table->unsignedInteger('order')->default('50');
            $table->unsignedInteger('status')->default('1');
            $table->unsignedInteger('views')->default('1');
            $table->unsignedInteger('featured')->default('0');
            $table->unsignedInteger('published')->default('1');
			
            $table->unsignedInteger('mafia')->default('0');


			//
			$table->unsignedBigInteger('category_id')->nullable();          
				// ИМЯ ед. ч. -- эта тбл. и тбл. на какую ссылаемся + суффикс 
            $table->index('category_id', 'post_category_idx'); 
				//какой параметр берем ...  задаем ему имя для оращения, по правилу "ИМЯ ед. ч. -- эта тбл. и тбл. на какую ссылаемся + суффикс" 
            $table->foreign('category_id', 'post_category_fk')->on('categories')->references('id')->onDelete('cascade');


			$table->foreignId('user_id')
				->default('1')
				->references('id')
				->on('users')
				->cascadeOnDelete();

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
        Schema::dropIfExists('posts');
    }
}
