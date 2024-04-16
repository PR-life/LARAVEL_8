<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaperFaqsTable extends Migration
{

    public function up()
    {
        Schema::create('paper_faqs', function (Blueprint $table) {
            $table->unsignedBigInteger('paper_id');
            $table->unsignedBigInteger('faq_id');

            $table->index('paper_id', 'paper_faq_paper_idx');
            $table->index('faq_id', 'paper_faq_faq_idx');

            $table->foreign('paper_id', 'paper_faq_paper_fk')->on('papers')->references('id')->onDelete('cascade');
            $table->foreign('faq_id', 'paper_faq_faq_fk')->on('faqs')->references('id')->onDelete('cascade');

            $table->unique(['paper_id','faq_id']);
			$table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('paper_faqs');
    }
}
