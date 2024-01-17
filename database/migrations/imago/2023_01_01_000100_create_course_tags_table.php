<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_tags', function (Blueprint $table) {
            $table->unsignedBigInteger('course_id');
            $table->unsignedBigInteger('tag_id');

            $table->index('course_id', 'course_tag_course_idx');
            $table->index('tag_id', 'course_tag_tag_idx');

            $table->foreign('course_id', 'course_tag_course_fk')->on('courses')->references('id')->onDelete('cascade');
            $table->foreign('tag_id', 'course_tag_tag_fk')->on('tags')->references('id')->onDelete('cascade');

            $table->unique(['course_id','tag_id']);
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
        Schema::dropIfExists('course_tags');
    }
}
