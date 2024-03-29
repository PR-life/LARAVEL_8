<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_categories', function (Blueprint $table) {
            $table->unsignedBigInteger('item_id');
            $table->unsignedBigInteger('category_id');

            $table->index('item_id', 'item_category_item_idx');
            $table->index('category_id', 'item_category_category_idx');

            $table->foreign('item_id', 'item_category_item_fk')->on('items')->references('id')->onDelete('cascade');
            $table->foreign('category_id', 'item_category_category_fk')->on('categories')->references('id')->onDelete('cascade');

            $table->unique(['item_id','category_id']);
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
        Schema::dropIfExists('item_categories');
    }
}
