<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLegoTable extends Migration
{

    public function up()
    {
        Schema::create('lego', function (Blueprint $table) {
            $table->id();
            $table->string('sku')->unique()->nullable();

            $table->string('name');

            $table->string('blade_name')->nullable();
            $table->string('schema')->nullable();

            $table->string('css')->nullable();
 
            $table->string('add_to_contents')->nullable();
            $table->string('where_to_show')->nullable();

            $table->string('h')->nullable();
            $table->text('text')->nullable();


            //
            $table->string('note')->nullable();

            //
			$table->unsignedInteger('order')->default(50);
            $table->unsignedInteger('status')->default(1);
            $table->unsignedInteger('pin')->nullable();
            $table->unsignedInteger('featured')->default('0');
            $table->unsignedInteger('published')->default('0');
			
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('lego');
    }
}
