<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_tags', function (Blueprint $table) {
            // $table->id();
            $table->unsignedBigInteger('post_id');
            $table->unsignedBigInteger('tag_id');

            // IDX
            $table->index('post_id', 'post_tag_post_idx'); // индекс из этой модели -> к модели Post
            $table->index('tag_id', 'post_tag_tag_idx'); // индекс из этой модели -> к модели Tag

            // FK
            $table->foreign('post_id', 'post_tag_post_fk')->on('posts')->references('id')->onDelete('cascade');
            $table->foreign('tag_id', 'post_tag_tag_fk')->on('tags')->references('id')->onDelete('cascade');

            $table->unique(['post_id','tag_id']);
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
        Schema::dropIfExists('post_tags');
    }
}
