<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('sku')->unique()->nullable();

            $table->string('name');
            $table->string('slug');
			
            $table->string('name_tag')->nullable();
			$table->string('name_seo')->nullable();
            $table->string('h1')->nullable();

            $table->string('bread_name')->nullable();

            $table->string('prev_h1')->nullable();
			$table->string('prev_h2')->nullable();
			$table->string('prev_p')->nullable();
            $table->string('prev_url')->nullable();

			//

            $table->foreignId('group_id')
                ->nullable()
                ->references('id')
                ->on('groups');

            $table->foreignId('tag_id')
                ->nullable()
                ->references('id')
                ->on('tags');

            $table->unsignedBigInteger('category_id')->nullable();
            $table->foreign('category_id')->references('id')->on('categories');
			
			
            //
            $table->unsignedBigInteger('menu')->nullable();
            $table->string('string_1')->nullable();
            $table->text('knot_1')->nullable();
  			
			$table->unsignedInteger('order')->default('50');
            $table->unsignedInteger('status')->default('1');
            $table->unsignedInteger('published')->default('1');
			
			$table->string('canonical')->nullable();
			$table->string('title')->nullable();
			$table->string('description')->nullable();
			$table->string('keywords')->nullable();

             
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
        Schema::dropIfExists('categories');
    }
}