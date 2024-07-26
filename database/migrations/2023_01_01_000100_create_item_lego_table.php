<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemLegoTable extends Migration
{

    public function up()
    {
        Schema::create('item_lego', function (Blueprint $table) {
            $table->unsignedBigInteger('item_id');
            $table->unsignedBigInteger('lego_id');

            $table->foreign('item_id')->references('id')->on('items')->onDelete('cascade');
            $table->foreign('lego_id')->references('id')->on('lego')->onDelete('cascade');

            $table->unique(['item_id', 'lego_id']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('item_lego');
    }
}