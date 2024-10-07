<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{

    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
			$table->string('sku')->unique()->nullable();

            $table->string('name');
			$table->string('slug')->unique();

            $table->string('mockup')->nullable();
            $table->string('schema')->nullable();
            $table->string('schema_teaser')->nullable();
            $table->string('css')->nullable();

            $table->string('name_tag')->nullable();
            $table->string('name_seo')->nullable();
            $table->string('bread_name')->nullable();

            $table->string('h1')->nullable();
            $table->string('h2')->nullable();
            $table->text('intro')->nullable();
            $table->text('article')->nullable();
			// $table->text('details_1')->nullable();
			// $table->text('details_2')->nullable();
            $table->text('text_global')->nullable();
            $table->text('text_global_supporting')->nullable();
            
			// vars
			$table->string('price')->nullable();


            $table->string('prev_h1')->nullable();
            $table->string('prev_h2')->nullable();
            $table->string('prev_p')->nullable();
            $table->string('prev_url')->nullable();
            
            //
            $table->string('image')->nullable();
            $table->string('image_original')->nullable();
            $table->string('image_prev')->nullable();


			//
			$table->text('note')->nullable();


            //
            $table->unsignedInteger('mafia')->nullable();

            //
			$table->unsignedInteger('order')->default(50);
            $table->unsignedInteger('status')->default(1);
            $table->unsignedInteger('views')->default('1');
            $table->unsignedInteger('pin')->nullable();
            $table->unsignedInteger('featured')->default('0');
            $table->unsignedInteger('published')->default(1);
			

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

    public function down()
    {
        Schema::dropIfExists('items');
    }
}
