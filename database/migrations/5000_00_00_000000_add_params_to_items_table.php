<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddParamsToItemsTable extends Migration
{

     public function up()
     {
         Schema::table('items', function (Blueprint $table) {
             $table->after('note', function ($table) {
                $table->foreignId('style_id')
                    ->nullable()
                    ->references('id')
                    ->on('tags');
             });
         });
     }

    public function down()
    {
        Schema::table('items', function (Blueprint $table) {
			$table->dropForeign(['style_id']);
			$table->dropColumn('style_id');
		});
    }
}
