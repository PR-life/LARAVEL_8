<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductFeaturesTable extends Migration
{

    public function up()
    {
        Schema::create('product_features', function (Blueprint $table) {

            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('feature_id');

            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->foreign('feature_id')->references('id')->on('features')->onDelete('cascade');

            $table->unique(['product_id', 'feature_id']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('product_features');
    }
}
