<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceCategoriesTable extends Migration
{
        
    public function up()
    {
        Schema::create('service_categories', function (Blueprint $table) {
            $table->unsignedBigInteger('service_id');
            $table->unsignedBigInteger('category_id');

            $table->index('service_id', 'service_category_category_idx');
            $table->index('category_id', 'service_category_service_idx');

            $table->foreign('service_id', 'service_category_category_fk')->on('services')->references('id')->onDelete('cascade');
            $table->foreign('category_id', 'service_category_service_fk')->on('categories')->references('id')->onDelete('cascade');

            $table->unique(['service_id','category_id']);
            
			$table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('service_categories');
    }
}
