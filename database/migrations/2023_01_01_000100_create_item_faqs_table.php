<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemFaqsTable extends Migration
{

    public function up()
    {
        Schema::create('item_faqs', function (Blueprint $table) {
            $table->unsignedBigInteger('item_id');
            $table->unsignedBigInteger('faq_id');

            $table->index('item_id', 'item_faq_item_idx');
            $table->index('faq_id', 'item_faq_faq_idx');

            $table->foreign('item_id', 'item_faq_item_fk')->on('items')->references('id')->onDelete('cascade');
            $table->foreign('item_id', 'item_faq_faq_fk')->on('faqs')->references('id')->onDelete('cascade');

            $table->unique(['item_id','faq_id']);
			$table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('item_faqs');
    }
}
