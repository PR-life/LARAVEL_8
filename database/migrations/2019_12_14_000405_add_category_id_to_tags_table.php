<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCategoryIdToTagsTable extends Migration
{

     public function up()
     {
         Schema::table('tags', function (Blueprint $table) {
             $table->after('group_id', function ($table) {
                 $table->foreignId('category_id')
                 ->nullable()
                 ->references('id')
                 ->on('categories');
             });
         });
     }

    public function down()
    {
        Schema::table('tags', function (Blueprint $table) {
            $table->dropForeign('tags_category_id_foreign');
            // $table->dropIndex('tags_category_id_foreign');
            $table->dropColumn('category_id');
		});
    }
}
// $table->dropForeign('lists_user_id_foreign');
// $table->dropIndex('lists_user_id_index');
// $table->dropColumn('user_id');
