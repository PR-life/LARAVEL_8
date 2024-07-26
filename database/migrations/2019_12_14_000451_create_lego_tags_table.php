<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLegoTagsTable extends Migration
{

    public function up()
    {
        Schema::create('lego_tags', function (Blueprint $table) {
            $table->unsignedBigInteger('lego_id');
            $table->unsignedBigInteger('tag_id');

            $table->foreign('lego_id')->references('id')->on('lego')->onDelete('cascade');
            $table->foreign('tag_id')->references('id')->on('tags')->onDelete('cascade');

            $table->unique(['lego_id', 'tag_id']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('lego_tags');
    }
}
