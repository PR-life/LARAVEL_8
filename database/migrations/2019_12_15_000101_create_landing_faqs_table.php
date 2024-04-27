<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLandingFaqsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('landing_faqs', function (Blueprint $table) {
            $table->unsignedBigInteger('landing_id');
            $table->unsignedBigInteger('faq_id');

            $table->index('landing_id', 'landing_faq_landing_idx');
            $table->index('faq_id', 'landing_faq_faq_idx');

            $table->foreign('landing_id', 'landing_faq_landing_fk')->on('landings')->references('id')->onDelete('cascade');
            $table->foreign('faq_id', 'landing_faq_faq_fk')->on('faqs')->references('id')->onDelete('cascade');

            $table->unique(['landing_id','faq_id']);
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
        Schema::dropIfExists('landing_faqs');
    }
}
