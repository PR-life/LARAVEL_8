<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
			$table->string('sku')->unique()->nullable();

            $table->string('name');
			$table->string('slug')->unique();

            $table->string('css')->nullable();

            $table->string('class')->nullable();
            $table->string('type')->nullable();
            $table->string('brand')->nullable();

            $table->text('h2')->nullable();
            $table->text('intro')->nullable();
			$table->text('details_1')->nullable();
			$table->text('details_2')->nullable();



			$table->string('en_name')->nullable();
            $table->text('en_h2')->nullable();
            $table->text('en_intro')->nullable();
			$table->text('en_details_1')->nullable();
			$table->text('en_details_2')->nullable();

			$table->text('menu_kite')->nullable();


			//vars
			$table->string('var_nomer')->nullable();
			$table->string('var_text')->nullable();

			$table->unsignedInteger('var_certification_fda')->default('0');
			$table->unsignedInteger('var_certification_ce')->default('0');
			$table->unsignedInteger('var_certification_eac')->default('0');

			$table->unsignedInteger('var_sborka_us')->default('0');
			$table->unsignedInteger('var_sborka_ec')->default('0');
			$table->unsignedInteger('var_test_ec')->default('0');

			$table->string('var_po')->nullable();
			$table->unsignedInteger('var_lcd_display')->default('0');
			$table->unsignedInteger('var_diods')->nullable();
			$table->unsignedInteger('var_sba')->nullable();
			$table->unsignedInteger('var_ik')->nullable();

			$table->unsignedInteger('var_bipolar_sensor')->default('0');
			$table->unsignedInteger('var_plate_sensor_electrode')->default('0');
			$table->unsignedInteger('var_panel_illumination')->default('0');

			$table->string('var_stuff_1')->nullable();
			$table->unsignedInteger('var_stuff_2')->default('0');

			$table->string('var_standart_connection')->nullable();
			$table->unsignedInteger('var_mi')->default('1');
			$table->string('var_mok')->nullable();
			$table->string('var_core_frequency')->nullable();
			$table->string('var_request_frequency')->nullable();
			$table->unsignedInteger('var_speed_info')->nullable();

			$table->string('var_stuff_3')->nullable();
			$table->unsignedInteger('var_stuff_4')->nullable();

			$table->unsignedInteger('var_channel_connection')->nullable();
			$table->unsignedInteger('var_remote_access')->default('0');
			$table->unsignedInteger('var_bench_tests')->nullable();
			$table->string('var_iec')->nullable();

			$table->unsignedInteger('var_stuff_5')->nullable();
			$table->string('var_stuff_6')->nullable();


			//
			$table->text('knot_1')->nullable();


			$table->unsignedInteger('order')->default('50');
            $table->unsignedInteger('status')->default('1');
            $table->unsignedInteger('views')->default('1');
            $table->unsignedInteger('featured')->default('0');
            $table->unsignedInteger('published')->default('1');
			
			//
            $table->unsignedInteger('mafia')->default('0');


			//
			$table->unsignedInteger('tag_id')->nullable();
			
			$table->unsignedBigInteger('category_id')->nullable();
            $table->index('category_id', 'item_category_idx'); // ИМЯ ед. ч. -- эта тбл. и тбл. на какую ссылаемся + суффикс 
            $table->foreign('category_id', 'item_category_fk')->on('categories')->references('id'); // ->onDelete('cascade')
        
			//
			$table->string('title')->nullable();
			$table->string('description')->nullable();
			$table->string('keywords')->nullable();

			$table->string('en_title')->nullable();
			$table->string('en_description')->nullable();
			$table->string('en_keywords')->nullable();

			//
		    $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
}
