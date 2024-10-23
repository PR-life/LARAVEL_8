<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMagnapinnaToPapersTable extends Migration
{

     public function up()
     {
         Schema::table('papers', function (Blueprint $table) {
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

                $table->unsignedBigInteger('paper_id')->nullable();
                $table->foreign('paper_id')->references('id')->on('papers');


             });
         });
     }

    public function down()
    {
        Schema::table('papers', function (Blueprint $table) {

            $table->dropForeign('papers_user_id_foreign');
			$table->dropColumn('user_id');

            $table->dropForeign('papers_group_id_foreign');
			$table->dropColumn('group_id');

            $table->dropForeign('papers_tag_id_foreign');
			$table->dropColumn('tag_id');

            $table->dropForeign('papers_category_id_foreign');
			$table->dropColumn('category_id');

            $table->dropForeign('papers_paper_id_foreign');
			$table->dropColumn('paper_id');
		});
    }
}
