<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoryItemsTable extends Migration
{

    public function up()
    {
        Schema::create('category_items', function (Blueprint $table) {
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('item_id');

            // IDX
            $table->index('category_id', 'category_item_category_idx');
            $table->index('item_id', 'category_item_item_idx');

            // FK
            $table->foreign('category_id', 'category_item_category_fk')->on('categories')->references('id')->onDelete('cascade');
            $table->foreign('item_id', 'category_item_item_fk')->on('items')->references('id')->onDelete('cascade');

            $table->unique(['category_id','item_id']);
			$table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('category_items');
    }
}
