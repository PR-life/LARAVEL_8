<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoryLegoTable extends Migration
{

    public function up()
    {
        Schema::create('category_lego', function (Blueprint $table) {
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('lego_id');

            // IDX
            $table->index('category_id', 'category_lego_category_idx');
            $table->index('lego_id', 'category_lego_lego_idx');

            // FK
            $table->foreign('category_id', 'category_lego_category_fk')->on('categories')->references('id')->onDelete('cascade');
            $table->foreign('lego_id', 'category_lego_lego_fk')->on('lego')->references('id')->onDelete('cascade');

            $table->unique(['category_id','lego_id']);
			$table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('category_lego');
    }
}
