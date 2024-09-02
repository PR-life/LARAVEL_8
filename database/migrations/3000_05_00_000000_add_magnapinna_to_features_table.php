<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMagnapinnaToFeaturesTable extends Migration
{

     public function up()
     {
         Schema::table('features', function (Blueprint $table) {
             $table->after('slug', function ($table) {
                $table->foreignId('group_id')->nullable()->constrained('groups');
                $table->foreignId('tag_id')->nullable()->constrained('tags');
                $table->foreignId('category_id')->nullable()->constrained('categories');
             });
         });
     }

    public function down()
    {
        Schema::table('features', function (Blueprint $table) {
            $table->dropForeign(['group_id']);
            $table->dropColumn('group_id');

            $table->dropForeign(['tag_id']);
            $table->dropColumn('tag_id');

            $table->dropForeign(['category_id']);
            $table->dropColumn('category_id');
		});
    }
}
