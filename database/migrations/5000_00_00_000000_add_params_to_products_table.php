<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddParamsToProductsTable extends Migration
{

    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->after('details_2', function ($table) {
                $table->string('price')->nullable();
                $table->string('price_old')->nullable();
                $table->string('price_name')->nullable();
                $table->string('discount_percentage')->nullable();
                //
                $table->string('param_liters')->nullable();
            });
        });
    }

    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('price');
            $table->dropColumn('price_old');
            $table->dropColumn('price_name');
            $table->dropColumn('discount_percentage');
            $table->dropColumn('param_liters');
        });
    }
}
