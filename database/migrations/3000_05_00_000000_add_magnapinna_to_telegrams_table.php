<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMagnapinnaToTelegramsTable extends Migration
{

     public function up()
     {
         Schema::table('telegrams', function (Blueprint $table) {
             $table->after('note', function ($table) {

                $table->foreignId('user_id')
                    ->default('1')
                    ->references('id')
                    ->on('users');
                    // ->cascadeOnDelete();

                $table->foreignId('group_id')
                    ->nullable()
                    ->references('id')
                    ->on('groups');

                $table->foreignId('tag_id')
                    ->nullable()
                    ->references('id')
                    ->on('tags');

                $table->unsignedBigInteger('category_id')->nullable();
                $table->foreign('category_id')->references('id')->on('categories');

                $table->unsignedBigInteger('telegram_id')->nullable();
                $table->foreign('telegram_id')->references('id')->on('telegrams');


             });
         });
     }

    public function down()
    {
        Schema::table('telegrams', function (Blueprint $table) {
            $table->dropForeign('telegrams_user_id_foreign');
			$table->dropColumn('user_id');

            $table->dropForeign('telegrams_group_id_foreign');
			$table->dropColumn('group_id');

            $table->dropForeign('telegrams_tag_id_foreign');
			$table->dropColumn('tag_id');

            $table->dropForeign('telegrams_category_id_foreign');
			$table->dropColumn('category_id');

            $table->dropForeign('telegrams_telegram_id_foreign');
			$table->dropColumn('telegram_id');
		});
    }
}
