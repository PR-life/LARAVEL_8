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
			$table->string('sku')->nullable();
            $table->string('name')->nullable();

			$table->string('filter_par_1')->nullable();

            $table->string('h1')->nullable();
			$table->text('text')->nullable();

            $table->string('route_name')->nullable();

			$table->text('knot_1')->nullable();


			$table->unsignedInteger('order')->default('50');
            $table->unsignedInteger('status')->default('1');

            $table->unsignedInteger('featured')->default('0');
            $table->unsignedInteger('published')->default('1');
			
            $table->unsignedInteger('mafia')->default('0');


			//
			$table->unsignedBigInteger('faq_id')->nullable();          

            // $table->index('faq_id', 'faq_faq_idx');
            // $table->foreign('faq_id', 'faq_faq_fk')->on('faqs')->references('id')->onDelete('cascade');
            $table->foreign('faq_id')->references('id')->on('faqs')->onDelete('cascade');

			//
			$table->unsignedBigInteger('category_id')->nullable();          

            $table->index('category_id', 'faq_category_idx'); // ИМЯ ед. ч. -- эта тбл. и тбл. на какую ссылаемся + суффикс 
            $table->foreign('category_id', 'faq_category_fk')->on('categories')->references('id'); // ->onDelete('cascade')

            //
            $table->unsignedBigInteger('group_id')->nullable();          

            $table->index('group_id', 'faq_group_idx'); // ИМЯ ед. ч. -- эта тбл. и тбл. на какую ссылаемся + суффикс 
            $table->foreign('group_id', 'faq_group_fk')->on('groups')->references('id'); // ->onDelete('cascade')
           


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
