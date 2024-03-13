<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFaceTagsTable extends Migration
{

    public function up()
    {
        Schema::create('face_tags', function (Blueprint $table) {

            $table->unsignedBigInteger('face_id');
            $table->unsignedBigInteger('tag_id');

            // IDX
            $table->index('face_id', 'face_tag_face_idx');
            $table->index('tag_id', 'face_tag_tag_idx');

            // FK
            $table->foreign('face_id', 'face_tag_face_fk')->on('faces')->references('id')->onDelete('cascade');
            $table->foreign('tag_id', 'face_tag_tag_fk')->on('tags')->references('id')->onDelete('cascade');

            $table->unique(['face_id','tag_id']);
			$table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('face_tags');
    }
}
