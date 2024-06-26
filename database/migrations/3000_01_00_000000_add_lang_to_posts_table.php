<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddLangToPostsTable extends Migration
{

     public function up()
     {
         Schema::table('posts', function (Blueprint $table) {
             $table->after('prev_p', function ($table) {
                $table->string('en_name')->nullable();
                $table->string('en_h1')->nullable();
                $table->text('en_intro')->nullable();
                $table->text('en_text')->nullable();
                $table->text('en_prev_h1')->nullable();
                $table->text('en_prev_h2')->nullable();
                $table->text('en_prev_p')->nullable();
             });
             $table->after('keywords', function ($table) {
                $table->text('en_canonical')->nullable();
                $table->string('en_title')->nullable();
                $table->string('en_description')->nullable();
                $table->text('en_keywords')->nullable();
            });
         });
     }

    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
			$table->dropColumn('en_name');
			$table->dropColumn('en_h1');
			$table->dropColumn('en_intro');
			$table->dropColumn('en_text');
			$table->dropColumn('en_prev_h1');
			$table->dropColumn('en_prev_h2');
			$table->dropColumn('en_prev_p');
			$table->dropColumn('en_title');
			$table->dropColumn('en_description');
			$table->dropColumn('en_keywords');
			$table->dropColumn('en_canonical');
		});
    }
}
