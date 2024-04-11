<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemItemsTable extends Migration
{
    public function up()
    {
        Schema::create('item_items', function (Blueprint $table) {
            $table->unsignedBigInteger('item_id');
            $table->unsignedBigInteger('items_id');

            $table->index('item_id', 'item_items_item_idx');
            $table->index('items_id', 'item_item_items_idx');

            $table->foreign('item_id', 'item_items_item_fk')->on('items')->references('id')->onDelete('cascade');
            $table->foreign('items_id', 'items_item_items_fk')->on('items')->references('id')->onDelete('cascade');



            $table->unique(['item_id','items_id']);
			$table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('item_items');
    }
}
