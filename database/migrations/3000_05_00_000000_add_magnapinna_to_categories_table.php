<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMagnapinnaToCategoriesTable extends Migration
{

     public function up()
     {
         Schema::table('categories', function (Blueprint $table) {
             $table->after('knot_1', function ($table) {

                $table->unsignedBigInteger('category_services_id')->nullable();
                $table->foreign('category_services_id')->references('id')->on('categories');

             });
         });
     }

    public function down()
    {
        Schema::table('categories', function (Blueprint $table) {
            $table->dropForeign('categories_category_services_id_foreign');
			$table->dropColumn('category_services_id');
		});
    }
}
