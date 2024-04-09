<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFaqItemsTable extends Migration
{

    public function up()
    {
        Schema::create('faq_items', function (Blueprint $table) {
            $table->unsignedBigInteger('faq_id');
            $table->unsignedBigInteger('item_id');

            $table->index('faq_id', 'faq_item_faq_idx');
            $table->index('item_id', 'faq_item_item_idx');

            $table->foreign('faq_id', 'faq_item_faq_fk')->on('faqs')->references('id')->onDelete('cascade');
            $table->foreign('item_id', 'faq_item_item_fk')->on('items')->references('id')->onDelete('cascade');

            $table->unique(['faq_id','item_id']);
			$table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('faq_items');
    }
}
