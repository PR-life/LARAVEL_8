<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoryCategoriesTable extends Migration
{
    public function up()
    {
        Schema::create('category_categories', function (Blueprint $table) {
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('categories_id');

            // Индексы для ускорения запросов
            $table->index('category_id', 'category_categories_category_idx');
            $table->index('categories_id', 'category_categories_categories_idx');

            // Внешние ключи с каскадным удалением
            $table->foreign('category_id', 'category_categories_category_fk')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('categories_id', 'category_categories_categories_fk')->references('id')->on('categories')->onDelete('cascade');

            // Уникальная пара category_id и categories_id
            $table->unique(['category_id', 'categories_id']);
            
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('category_categories');
    }
}

