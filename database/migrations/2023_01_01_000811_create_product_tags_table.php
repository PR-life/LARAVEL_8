<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_tags', function (Blueprint $table) {
            // $table->id();
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('tag_id');

            // IDX
            $table->index('product_id', 'product_tag_product_idx'); // индекс из этой модели -> к модели product
            $table->index('tag_id', 'product_tag_tag_idx'); // индекс из этой модели -> к модели Tag

            // FK
            $table->foreign('product_id', 'product_tag_product_fk')->on('products')->references('id')->onDelete('cascade');
            $table->foreign('tag_id', 'product_tag_tag_fk')->on('tags')->references('id')->onDelete('cascade');

            $table->unique(['product_id','tag_id']);
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
        Schema::dropIfExists('product_tags');
    }
}
