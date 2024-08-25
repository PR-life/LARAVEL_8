<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOogwaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oogways', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->text('text_prev')->nullable();
            $table->text('text')->nullable();
            $table->text('text_tz')->nullable();
            $table->text('text_result')->nullable();
			
	
            $table->unsignedBigInteger('oogway_id')->nullable();
            $table->foreign('oogway_id')->references('id')->on('oogways');
			
  			
			$table->unsignedInteger('order')->default(50);
            $table->unsignedInteger('status')->default(1);
            $table->unsignedInteger('published')->default(1);
			
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('oogways');
    }
}
