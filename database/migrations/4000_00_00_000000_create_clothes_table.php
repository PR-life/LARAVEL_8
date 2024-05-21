<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClothesTable extends Migration
{

    public function up()
    {
        Schema::create('clothes', function (Blueprint $table) {
            $table->id();
			$table->string('sku')->unique()->nullable();

			$table->foreignId('face_id')
				->references('id')
				->on('faces')
				->cascadeOnDelete();

            //
            $table->string('up_size')->nullable();
            $table->string('bottom_size')->nullable();
            $table->string('size_jacket')->nullable();
            $table->string('size_jacket_height')->nullable();
            $table->string('size_jacket_exhaustiveness')->nullable();
            $table->string('size_trouser')->nullable();
            $table->string('size_shirt')->nullable();
            $table->string('size_hosiery')->nullable(); // ??трикотаж
            $table->string('size_jeans')->nullable();
            $table->string('size_shoes')->nullable();
            // $table->string('size_')->nullable();


            //
			$table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('clothes');
    }
}
