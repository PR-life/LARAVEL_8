<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailsTable extends Migration
{
    public function up()
    {
        Schema::create('details', function (Blueprint $table) {
            $table->id();
            $table->string('sku')->unique()->nullable();

            $table->string('name')->unique();
            $table->string('slug')->unique();


			$table->unsignedInteger('order')->default('50');
            $table->unsignedInteger('status')->default('1');
            $table->unsignedInteger('published')->default('1');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('details');
    }
}
