<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMagnapinnaToItemsTable extends Migration
{

     public function up()
     {
         Schema::table('items', function (Blueprint $table) {
             $table->after('knot_1', function ($table) {

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

                $table->unsignedBigInteger('item_id')->nullable();
                $table->foreign('item_id')->references('id')->on('items');
                
                $table->unsignedBigInteger('service_delivery_id')->nullable();
                $table->foreign('service_delivery_id')->references('id')->on('services');

                $table->unsignedBigInteger('category_services_id')->nullable();
                $table->foreign('category_services_id')->references('id')->on('categories');


             });
         });
     }

    public function down()
    {
        Schema::table('items', function (Blueprint $table) {

            $table->dropForeign('items_group_id_foreign');
			$table->dropColumn('group_id');

            $table->dropForeign('items_tag_id_foreign');
			$table->dropColumn('tag_id');

            $table->dropForeign('items_category_id_foreign');
			$table->dropColumn('category_id');

            $table->dropForeign('items_item_id_foreign');
			$table->dropColumn('item_id');

            $table->dropForeign('items_service_delivery_id_foreign');
			$table->dropColumn('service_delivery_id');

            $table->dropForeign('items_category_services_id_foreign');
			$table->dropColumn('category_services_id');
		});
    }
}
