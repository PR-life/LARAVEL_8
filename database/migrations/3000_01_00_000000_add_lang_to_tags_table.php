<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddLangToTagsTable extends Migration
{

     public function up()
     {
         Schema::table('tags', function (Blueprint $table) {
             $table->after('name_8', function ($table) {
                 $table->string('en_name')->nullable();
                 $table->string('en_name_2')->nullable();
                 $table->string('en_name_3')->nullable();
                 $table->text('en_name_4')->nullable();
                 $table->text('en_name_5')->nullable();
                 $table->text('en_name_6')->nullable();
                 $table->text('en_name_7')->nullable();
                 $table->text('en_name_8')->nullable();
             });
         });
     }

    public function down()
    {
        Schema::table('tags', function (Blueprint $table) {
			$table->dropColumn('en_name');
			$table->dropColumn('en_name_2');
			$table->dropColumn('en_name_3');
			$table->dropColumn('en_name_4');
			$table->dropColumn('en_name_5');
			$table->dropColumn('en_name_6');
			$table->dropColumn('en_name_7');
			$table->dropColumn('en_name_8');
		});
    }
}
