<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddParamItemIdToSmsTable extends Migration
{
    
     public function up()
     {
         Schema::table('sms', function (Blueprint $table) {
             $table->after('landing_id', function ($table) {

                $table->foreignId('item_id')
                ->nullable()
                ->references('id')
                ->on('items');
                
             });
         });
     }

    public function down()
    {
        Schema::table('sms', function (Blueprint $table) {
			$table->dropColumn('item_id');
		});
    }
}
