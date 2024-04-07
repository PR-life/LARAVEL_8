<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostFaqsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_faqs', function (Blueprint $table) {
            $table->unsignedBigInteger('post_id');
            $table->unsignedBigInteger('faq_id');

            $table->index('post_id', 'post_faq_post_idx');
            $table->index('faq_id', 'post_faq_faq_idx');

            $table->foreign('post_id', 'post_faq_post_fk')->on('posts')->references('id')->onDelete('cascade');
            $table->foreign('faq_id', 'post_faq_faq_fk')->on('faqs')->references('id')->onDelete('cascade');

            $table->unique(['post_id','faq_id']);
            
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
        Schema::dropIfExists('post_faqs');
    }
}
