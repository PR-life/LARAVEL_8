<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogFacesTable extends Migration
{

    public function up()
    {
        Schema::create('log_faces', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->text('note')->nullable();
            $table->foreignId('face_id')->constrained('faces')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('log_faces');
    }
}
