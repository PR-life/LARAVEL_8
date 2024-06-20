<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddParamsToServicesTable extends Migration
{

     public function up()
     {
         Schema::table('services', function (Blueprint $table) {
             $table->after('css', function ($table) {
                $table->string('param_geo')->nullable();
             });
         });
     }

    public function down()
    {
        Schema::table('services', function (Blueprint $table) {
			$table->dropColumn('param_geo');
		});
    }
}
