<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemmodulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itemmodules', function (Blueprint $table) {
            $table->id();
			$table->string('sku')->unique()->nullable();

            $table->string('name');
			$table->string('slug')->unique();

            $table->string('css')->nullable();

            $table->string('type')->nullable();
            $table->string('brand')->nullable();

            $table->text('h2')->nullable();
            $table->text('intro')->nullable();
			$table->text('details_1')->nullable();
			$table->text('details_2')->nullable();


			$table->string('en_name')->nullable();
            $table->text('en_h2')->nullable();
            $table->text('en_intro')->nullable();
			$table->text('en_details_1')->nullable();
			$table->text('en_details_2')->nullable();

			$table->text('menu_kite')->nullable();

			//
			$table->text('knot_1')->nullable();


			$table->unsignedInteger('order')->default('50');
            $table->unsignedInteger('status')->default('1');
            $table->unsignedInteger('views')->default('1');
            $table->unsignedInteger('featured')->default('0');
            $table->unsignedInteger('published')->default('1');
			
			//
            $table->unsignedInteger('mafia')->default('0');


			//
			$table->unsignedInteger('tag_id')->nullable();
			
			$table->unsignedBigInteger('category_id')->nullable();
            $table->index('category_id', 'itemmodule_category_idx'); // ИМЯ ед. ч. -- эта тбл. и тбл. на какую ссылаемся + суффикс 
            $table->foreign('category_id', 'itemmodule_category_fk')->on('categories')->references('id'); // ->onDelete('cascade')
        
			//
			$table->string('title')->nullable();
			$table->string('description')->nullable();
			$table->string('keywords')->nullable();

			$table->string('en_title')->nullable();
			$table->string('en_description')->nullable();
			$table->string('en_keywords')->nullable();

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
        Schema::dropIfExists('itemmodules');
    }
}
