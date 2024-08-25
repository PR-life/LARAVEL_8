<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLandingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('landings', function (Blueprint $table) {
            $table->id();
			$table->string('sku')->unique()->nullable();
	
            $table->string('name')->unique();

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


            //
			$table->text('knot_1')->nullable();

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
			$table->unsignedInteger('order')->default(50);
            $table->unsignedInteger('status')->default(1);
            $table->unsignedInteger('views')->default('1');
            $table->unsignedInteger('featured')->default('0');
            $table->unsignedInteger('published')->default(1);

			//
			$table->string('canonical')->nullable();
			$table->string('title')->nullable();
			$table->string('description')->nullable();
			$table->string('keywords')->nullable();
            
            $table->string('ogp_type')->nullable();
            $table->string('ogp_image')->nullable();
            $table->string('ogp_title')->nullable();
            $table->string('ogp_description')->nullable();

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
        Schema::dropIfExists('landings');
    }
}
