<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMagnapinnaToServicesTable extends Migration
{

     public function up()
     {
         Schema::table('services', function (Blueprint $table) {
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

                $table->unsignedBigInteger('service_id')->nullable();
                $table->foreign('service_id')->references('id')->on('services');


             });
         });
     }

    public function down()
    {
        Schema::table('services', function (Blueprint $table) {
            $table->dropForeign('services_user_id_foreign');
			$table->dropColumn('user_id');

            $table->dropForeign('services_group_id_foreign');
			$table->dropColumn('group_id');

            $table->dropForeign('services_tag_id_foreign');
			$table->dropColumn('tag_id');

            $table->dropForeign('services_category_id_foreign');
			$table->dropColumn('category_id');

            $table->dropForeign('services_service_id_foreign');
			$table->dropColumn('service_id');

		});
    }
}
