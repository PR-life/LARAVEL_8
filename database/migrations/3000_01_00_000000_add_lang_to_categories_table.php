<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddLangToCategoriesTable extends Migration
{

     public function up()
     {
         Schema::table('categories', function (Blueprint $table) {
             $table->after('h1', function ($table) {
                 $table->string('en_name')->nullable();
                 $table->string('en_name_tag')->nullable();
                 $table->string('en_name_seo')->nullable();
                 $table->string('en_h1')->nullable();
             });
             $table->after('keywords', function ($table) {
                 $table->string('en_canonical')->nullable();
                $table->string('en_title')->nullable();
                $table->string('en_description')->nullable();
                $table->string('en_keywords')->nullable();
            });
         });
     }

    public function down()
    {
        Schema::table('categories', function (Blueprint $table) {
			$table->dropColumn('en_name');
			$table->dropColumn('en_name_tag');
			$table->dropColumn('en_name_seo');
			$table->dropColumn('en_h1');
			$table->dropColumn('en_title');
			$table->dropColumn('en_description');
			$table->dropColumn('en_keywords');
			$table->dropColumn('en_canonical');
		});
    }
}
