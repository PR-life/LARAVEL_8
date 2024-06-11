<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceFaqsTable extends Migration
{

    public function up()
    {
        Schema::create('service_faqs', function (Blueprint $table) {
            $table->unsignedBigInteger('service_id');
            $table->unsignedBigInteger('faq_id');

            $table->index('service_id', 'service_faq_service_idx');
            $table->index('faq_id', 'service_faq_faq_idx');

            $table->foreign('service_id', 'service_faq_service_fk')->on('services')->references('id')->onDelete('cascade');
            $table->foreign('faq_id', 'service_faq_faq_fk')->on('faqs')->references('id')->onDelete('cascade');

            $table->unique(['service_id','faq_id']);
			$table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('service_faqs');
    }
}
