<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFaqFaqsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faq_faqs', function (Blueprint $table) {
            $table->unsignedBigInteger('faq_id');
            $table->unsignedBigInteger('faqs_id');

            $table->index('faq_id', 'faq_faqs_faq_idx');
            $table->index('faqs_id', 'faq_faq_faqs_idx');

            $table->foreign('faq_id', 'faq_faqs_faq_fk')->on('faqs')->references('id')->onDelete('cascade');
            $table->foreign('faqs_id', 'faqs_faq_faqs_fk')->on('faqs')->references('id')->onDelete('cascade');



            $table->unique(['faq_id','faqs_id']);
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
        Schema::dropIfExists('faq_faqs');
    }
}
