<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoryFaqsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_faqs', function (Blueprint $table) {
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('faq_id');

            $table->index('category_id', 'category_faq_category_idx');
            $table->index('faq_id', 'category_faq_faq_idx');

            $table->foreign('category_id', 'category_faq_category_fk')->on('categories')->references('id')->onDelete('cascade');
            $table->foreign('faq_id', 'category_faq_faq_fk')->on('faqs')->references('id')->onDelete('cascade');

            $table->unique(['category_id','faq_id']);
            
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
        Schema::dropIfExists('category_faqs');
    }
}
