<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFaqCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faq_categories', function (Blueprint $table) {
            $table->unsignedBigInteger('faq_id');
            $table->unsignedBigInteger('category_id');

            $table->index('faq_id', 'faq_category_faq_idx');
            $table->index('category_id', 'faq_category_category_idx');

            $table->foreign('faq_id', 'faq_category_faq_fk')->on('faqs')->references('id')->onDelete('cascade');
            $table->foreign('category_id', 'faq_category_category_fk')->on('categories')->references('id')->onDelete('cascade');

            $table->unique(['faq_id','category_id']);
			$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('faq_categories');
    }
}
