<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemCollectionsTable extends Migration
{

    public function up()
    {
        Schema::create('item_collections', function (Blueprint $table) {
            $table->unsignedBigInteger('item_id');
            $table->unsignedBigInteger('collection_id');

            $table->foreign('item_id')->references('id')->on('items')->onDelete('cascade');
            $table->foreign('collection_id')->references('id')->on('collections')->onDelete('cascade');

            $table->unique(['item_id', 'collection_id']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('item_collections');
    }
}