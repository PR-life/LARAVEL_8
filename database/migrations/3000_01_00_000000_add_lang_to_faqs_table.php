<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddLangToFaqsTable extends Migration
{

     public function up()
     {
         Schema::table('faqs', function (Blueprint $table) {
             $table->after('text', function ($table) {
                 $table->string('en_name')->nullable();
                 $table->string('en_h1')->nullable();
                 $table->text('en_text')->nullable();
             });
         });
     }

    public function down()
    {
        Schema::table('faqs', function (Blueprint $table) {
			$table->dropColumn('en_name');
			$table->dropColumn('en_h1');
			$table->dropColumn('en_text');
		});
    }
}
