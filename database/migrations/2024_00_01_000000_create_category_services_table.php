<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoryServicesTable extends Migration
{

    public function up()
    {
        Schema::create('category_services', function (Blueprint $table) {
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('service_id');

            // IDX
            $table->index('category_id', 'category_service_category_idx');
            $table->index('service_id', 'category_service_service_idx');

            // FK
            $table->foreign('category_id', 'category_service_category_fk')->on('categories')->references('id')->onDelete('cascade');
            $table->foreign('service_id', 'category_service_service_fk')->on('services')->references('id')->onDelete('cascade');

            $table->unique(['category_id','service_id']);
			$table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('category_services');
    }
}
