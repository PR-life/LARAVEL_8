<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMagnapinnaToCategoriesTable extends Migration
{

     public function up()
     {
         Schema::table('categories', function (Blueprint $table) {
             $table->after('note', function ($table) {

                $table->unsignedBigInteger('category_services_id')->nullable();
                $table->foreign('category_services_id')->references('id')->on('categories');

                $table->unsignedBigInteger('service_delivery_id')->nullable();
                $table->foreign('service_delivery_id')->references('id')->on('services');

                $table->unsignedBigInteger('paper_payment_id')->nullable();
                $table->foreign('paper_payment_id')->references('id')->on('papers');

                $table->unsignedBigInteger('paper_warranty_id')->nullable();
                $table->foreign('paper_warranty_id')->references('id')->on('papers');


             });
         });
     }

    public function down()
    {
        Schema::table('categories', function (Blueprint $table) {
            $table->dropForeign('categories_category_services_id_foreign');
			$table->dropColumn('category_services_id');

            $table->dropForeign('categories_service_delivery_id_foreign');
            $table->dropColumn('service_delivery_id');

            $table->dropForeign('categories_paper_payment_id_foreign');
            $table->dropColumn('paper_payment_id');

            $table->dropForeign('categories_paper_warranty_id_foreign');
            $table->dropColumn('paper_warranty_id');
		});
    }
}
