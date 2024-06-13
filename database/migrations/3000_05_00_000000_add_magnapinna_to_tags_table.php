<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMagnapinnaToTagsTable extends Migration
{

     public function up()
     {
         Schema::table('tags', function (Blueprint $table) {
             $table->after('category_id', function ($table) {
                
                $table->unsignedBigInteger('service_delivery_id')->nullable();
                $table->foreign('service_delivery_id')->references('id')->on('services');

                $table->unsignedBigInteger('category_services_id')->nullable();
                $table->foreign('category_services_id')->references('id')->on('categories');


             });
         });
     }

    public function down()
    {
        Schema::table('tags', function (Blueprint $table) {

            $table->dropForeign('tags_service_delivery_id_foreign');
			$table->dropColumn('service_delivery_id');

            $table->dropForeign('tags_category_services_id_foreign');
			$table->dropColumn('category_services_id');
		});
    }
}
