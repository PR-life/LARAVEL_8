<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsPaperTable extends Migration
{
    public function up()
    {
        Schema::create('comments_paper', function (Blueprint $table) {
            $table->id();

            $table->string('name')->default('аноним');
            $table->string('user_contact')->nullable();
			
            $table->string('h1')->nullable();
            $table->text('text')->nullable();

            $table->text('answer')->nullable();
            $table->string('answer_user_name')->nullable();

            $table->unsignedBigInteger('item_id')->nullable();
            $table->unsignedBigInteger('user_id')->default(1);

            // IDX
            $table->index('user_id', 'comments_paper_user_idx'); // индекс из этой модели -> к модели User
            $table->index('item_id', 'comments_paper_post_idx'); // индекс из этой модели -> к модели Post

            // FK
            $table->foreign('user_id', 'comments_paper_user_fk')->on('users')->references('id')->onDelete('cascade');
            $table->foreign('item_id', 'comments_paper_post_fk')->on('papers')->references('id')->onDelete('cascade');
			

            $table->string('order')->default(50);
            $table->string('published')->default(0);

            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('comments_paper');
    }
}
