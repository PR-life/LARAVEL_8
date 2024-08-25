<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemFeaturesTable extends Migration
{

    public function up()
    {
        Schema::create('item_features', function (Blueprint $table) {

            $table->unsignedBigInteger('item_id');
            $table->unsignedBigInteger('feature_id');

            $table->foreign('item_id')->references('id')->on('items')->onDelete('cascade');
            $table->foreign('feature_id')->references('id')->on('features')->onDelete('cascade');

            $table->unique(['item_id', 'feature_id']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('item_features');
    }
}
