<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaperLegoTable extends Migration
{

    public function up()
    {
        Schema::create('paper_lego', function (Blueprint $table) {
            $table->unsignedBigInteger('paper_id');
            $table->unsignedBigInteger('lego_id');

            $table->foreign('paper_id')->references('id')->on('papers')->onDelete('cascade');
            $table->foreign('lego_id')->references('id')->on('lego')->onDelete('cascade');

            $table->unique(['paper_id', 'lego_id']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('paper_lego');
    }
}