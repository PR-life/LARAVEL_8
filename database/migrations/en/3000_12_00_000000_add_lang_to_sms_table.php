<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddLangToSmsTable extends Migration
{

     public function up()
     {
         Schema::table('sms', function (Blueprint $table) {
             $table->after('mafia', function ($table) {
                 $table->string('lang')->nullable();
             });
         });
         Schema::table('sms_en', function (Blueprint $table) {
            $table->after('mafia', function ($table) {
                $table->string('lang')->nullable();
            });
        });
     }

    public function down()
    {
        Schema::table('sms', function (Blueprint $table) {
			$table->dropColumn('lang');
		});
        Schema::table('sms_en', function (Blueprint $table) {
			$table->dropColumn('lang');
		});
    }
}
