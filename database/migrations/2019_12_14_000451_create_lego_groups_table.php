<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLegoGroupsTable extends Migration
{

    public function up()
    {
        Schema::create('lego_groups', function (Blueprint $table) {
            $table->unsignedBigInteger('lego_id');
            $table->unsignedBigInteger('group_id');

            $table->foreign('lego_id')->references('id')->on('lego')->onDelete('cascade');
            $table->foreign('group_id')->references('id')->on('groups')->onDelete('cascade');

            $table->unique(['lego_id', 'group_id']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('lego_groups');
    }
}
