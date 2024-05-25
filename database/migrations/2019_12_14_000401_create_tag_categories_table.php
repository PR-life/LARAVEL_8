<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTagCategoriesTable extends Migration
{

    public function up()
    {
        Schema::create('tag_categories', function (Blueprint $table) {
            $table->unsignedBigInteger('tag_id');
            $table->unsignedBigInteger('category_id');

            $table->index('tag_id', 'tag_category_category_idx');
            $table->index('category_id', 'tag_category_tag_idx');

            $table->foreign('tag_id', 'tag_category_category_fk')->on('tags')->references('id')->onDelete('cascade');
            $table->foreign('category_id', 'tag_category_tag_fk')->on('categories')->references('id')->onDelete('cascade');

            $table->unique(['tag_id','category_id']);
            
			$table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tag_categories');
    }
}
