<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLegoCategoriesTable extends Migration
{

    public function up()
    {
        Schema::create('lego_categories', function (Blueprint $table) {
            $table->unsignedBigInteger('lego_id');
            $table->unsignedBigInteger('category_id');

            $table->foreign('lego_id')->references('id')->on('lego')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');

            $table->unique(['lego_id', 'category_id']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('lego_categories');
    }
}
