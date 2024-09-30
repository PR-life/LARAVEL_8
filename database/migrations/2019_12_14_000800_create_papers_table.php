<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePapersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('papers', function (Blueprint $table) {
            $table->id();
            $table->string('sku')->unique()->nullable();

            $table->string('name')->nullable();
			$table->string('slug')->unique();
			
            $table->string('mockup')->nullable();
            $table->string('schema')->nullable();
            $table->string('schema_teaser')->nullable();
            $table->string('css')->nullable();

            $table->string('name_tag')->nullable();
            $table->string('name_seo')->nullable();

            $table->string('h1')->nullable();
            $table->text('text')->nullable();
            $table->text('article')->nullable();
            $table->text('contents')->nullable();
            $table->text('answer')->nullable();
            $table->string('answer_user_name')->nullable();

			//Prev
            $table->string('bread_name')->nullable();
            
			$table->string('prev_h1')->nullable();
			$table->string('prev_h2')->nullable();
			$table->string('prev_p')->nullable();
			$table->string('prev_image')->nullable();
            $table->string('prev_url')->nullable();
			$table->string('prev_veil')->nullable();
            
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

            //Offer
            $table->string('price')->nullable();

            //
            $table->string('knot_1')->nullable();

            //
            $table->unsignedInteger('mafia')->nullable();

            //
			$table->unsignedInteger('order')->default(50);
            $table->unsignedInteger('status')->default(1);
            $table->unsignedInteger('views')->default('1');
			$table->unsignedInteger('pin')->nullable();
            $table->unsignedInteger('featured')->default('0');
            $table->unsignedInteger('published')->default('0');

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
        Schema::dropIfExists('papers');
    }
}
