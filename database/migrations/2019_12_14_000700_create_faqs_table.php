<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFaqsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faqs', function (Blueprint $table) {
            $table->id();
			$table->string('sku')->unique()->nullable();
            
            $table->string('name')->nullable();

			$table->string('filter_par_1')->nullable();
			$table->string('css')->nullable();
			$table->string('css_summary')->nullable();
			$table->string('css_content')->nullable();

            $table->string('h1')->nullable();
			$table->text('text')->nullable();

            $table->string('route_name')->nullable();

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
			
			$table->unsignedBigInteger('faq_id')->nullable();          
            $table->foreign('faq_id')->references('id')->on('faqs')->onDelete('cascade');

            //
            $table->unsignedInteger('mafia')->default('0');

			$table->unsignedInteger('order')->default('50');
            $table->unsignedInteger('status')->default('1');

            $table->unsignedInteger('featured')->default('0');
            $table->unsignedInteger('published')->default('1');
			

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
        Schema::dropIfExists('faqs');
    }
}
