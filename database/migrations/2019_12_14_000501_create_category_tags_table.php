<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoryTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_tags', function (Blueprint $table) {
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('tag_id');

            $table->index('category_id', 'category_tag_category_idx');
            $table->index('tag_id', 'category_tag_tag_idx');

            $table->foreign('category_id', 'category_tag_category_fk')->on('categories')->references('id')->onDelete('cascade');
            $table->foreign('tag_id', 'category_tag_tag_fk')->on('tags')->references('id')->onDelete('cascade');

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
        Schema::dropIfExists('category_tags');
    }
}
