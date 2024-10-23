<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddParamsToProductsTable extends Migration
{

    public function up()
    {
        Schema::table('products', function (Blueprint $table) {


            $table->after('text_global_supporting', function ($table) {
                $table->string('price_h')->nullable();
                $table->string('price_p')->nullable();
            });

            $table->after('price', function ($table) {
                $table->integer('price_old')->nullable();
                $table->string('price_name')->nullable();
                $table->string('discount_percentage')->nullable();
                //
                $table->integer('param_liters')->nullable();
                $table->integer('param_weight')->nullable();

            });
            $table->after('mafia', function ($table) {
                $table->integer('stock_quantity')->default(0); // Количество на складе
                $table->integer('reserved_quantity')->default(0); // Зарезервированные товары
                $table->integer('threshold_quantity')->default(0); // Минимальное количество для пополнения
                $table->boolean('in_stock')->default(false); // Наличие товара
            });
        });
    }

    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('price_h');
            $table->dropColumn('price_p');
            $table->dropColumn(['price_old', 'price_name', 'discount_percentage']);
            $table->dropColumn(['stock_quantity', 'reserved_quantity', 'threshold_quantity', 'in_stock']);
            $table->dropColumn('param_liters');
            $table->dropColumn('param_weight');
        });
    }
}
