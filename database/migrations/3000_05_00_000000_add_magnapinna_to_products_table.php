<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMagnapinnaToProductsTable extends Migration
{

     public function up()
     {
         Schema::table('products', function (Blueprint $table) {
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

                $table->unsignedBigInteger('feature_id')->nullable();
                $table->foreign('feature_id')->references('id')->on('features');

                $table->unsignedBigInteger('product_id')->nullable();
                $table->foreign('product_id')->references('id')->on('products');
                
                $table->unsignedBigInteger('product_surrogate_id')->nullable();
                $table->foreign('product_surrogate_id')->references('id')->on('products');

                $table->unsignedBigInteger('service_delivery_id')->nullable();
                $table->foreign('service_delivery_id')->references('id')->on('services');

                $table->unsignedBigInteger('paper_payment_id')->nullable();
                $table->foreign('paper_payment_id')->references('id')->on('papers');

                $table->unsignedBigInteger('paper_warranty_id')->nullable();
                $table->foreign('paper_warranty_id')->references('id')->on('papers');

                $table->unsignedBigInteger('paper_one_id')->nullable();
                $table->foreign('paper_one_id')->references('id')->on('papers');

                $table->unsignedBigInteger('paper_two_id')->nullable();
                $table->foreign('paper_two_id')->references('id')->on('papers');

                //
                $table->unsignedBigInteger('category_services_id')->nullable();
                $table->foreign('category_services_id')->references('id')->on('categories');


             });
         });
     }

    public function down()
    {
        Schema::table('products', function (Blueprint $table) {

            $table->dropForeign('products_group_id_foreign');
			$table->dropColumn('group_id');

            $table->dropForeign('products_tag_id_foreign');
			$table->dropColumn('tag_id');

            $table->dropForeign('products_category_id_foreign');
			$table->dropColumn('category_id');

            $table->dropForeign('products_feature_id_foreign');
			$table->dropColumn('feature_id');

            $table->dropForeign('products_product_id_foreign');
			$table->dropColumn('product_id');

            $table->dropForeign('products_product_surrogate_id_foreign');
            $table->dropColumn('product_surrogate_id');

            $table->dropForeign('products_service_delivery_id_foreign');
			$table->dropColumn('service_delivery_id');

            $table->dropForeign('products_paper_payment_id_foreign');
			$table->dropColumn('paper_payment_id');

            $table->dropForeign('products_paper_warranty_foreign');
			$table->dropColumn('paper_warranty_id');

            $table->dropForeign('products_paper_one_foreign');
			$table->dropColumn('paper_one_id');

            $table->dropForeign('products_paper_two_foreign');
			$table->dropColumn('paper_two_id');

            //
            $table->dropForeign('products_category_services_id_foreign');
			$table->dropColumn('category_services_id');
		});
    }
}
