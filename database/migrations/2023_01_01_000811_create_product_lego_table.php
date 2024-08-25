<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductLegoTable extends Migration
{

    public function up()
    {
        Schema::create('product_lego', function (Blueprint $table) {
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('lego_id');

            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->foreign('lego_id')->references('id')->on('lego')->onDelete('cascade');

            $table->unique(['product_id', 'lego_id']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('product_lego');
    }
}