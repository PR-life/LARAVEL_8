<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFaceFacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('face_faces', function (Blueprint $table) {
            $table->unsignedBigInteger('face_id');
            $table->unsignedBigInteger('faces_id');

            $table->index('face_id', 'face_faces_face_idx');
            $table->index('faces_id', 'face_face_faces_idx');

            $table->foreign('face_id', 'face_faces_face_fk')->on('faces')->references('id')->onDelete('cascade');
            $table->foreign('faces_id', 'faces_face_faces_fk')->on('faces')->references('id')->onDelete('cascade');



            $table->unique(['face_id','faces_id']);
			$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('face_faces');
    }
}
