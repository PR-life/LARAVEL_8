<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsPostTable extends Migration
{
    public function up()
    {
        Schema::create('comments_post', function (Blueprint $table) {
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
            $table->index('user_id', 'comments_post_user_idx'); // индекс из этой модели -> к модели User
            $table->index('item_id', 'comments_post_post_idx'); // индекс из этой модели -> к модели Post

            // FK
            $table->foreign('user_id', 'comments_post_user_fk')->on('users')->references('id');
            $table->foreign('item_id', 'comments_post_post_fk')->on('posts')->references('id');
			
            
            $table->string('order')->default(50);
            $table->string('published')->default(0);

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
        Schema::dropIfExists('comments_post');
    }
}
