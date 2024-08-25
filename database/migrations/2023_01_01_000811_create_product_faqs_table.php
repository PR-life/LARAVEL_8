<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductFaqsTable extends Migration
{

    public function up()
    {
        Schema::create('product_faqs', function (Blueprint $table) {
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('faq_id');

            $table->index('product_id', 'product_faq_product_idx');
            $table->index('faq_id', 'product_faq_faq_idx');

            $table->foreign('product_id', 'product_faq_product_fk')->on('products')->references('id')->onDelete('cascade');
            $table->foreign('faq_id', 'product_faq_faq_fk')->on('faqs')->references('id')->onDelete('cascade');

            $table->unique(['product_id','faq_id']);
			$table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('product_faqs');
    }
}
