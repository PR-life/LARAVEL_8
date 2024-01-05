<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFaqTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faq_tags', function (Blueprint $table) {
            $table->unsignedBigInteger('faq_id');
            $table->unsignedBigInteger('tag_id');

            $table->index('faq_id', 'faq_tag_faq_idx');
            $table->index('tag_id', 'faq_tag_tag_idx');

            $table->foreign('faq_id', 'faq_tag_faq_fk')->on('faqs')->references('id')->onDelete('cascade');
            $table->foreign('tag_id', 'faq_tag_tag_fk')->on('tags')->references('id')->onDelete('cascade');

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
        Schema::dropIfExists('faq_tags');
    }
}
