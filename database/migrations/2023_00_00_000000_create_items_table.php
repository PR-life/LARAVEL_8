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

            $table->string('shema')->default('default');
            $table->string('shema_teaser')->default('default');
            $table->string('css')->nullable();

            $table->string('type')->nullable();
            $table->string('action')->nullable();
            $table->string('face')->nullable();

            $table->string('name_tag')->nullable();
            $table->string('name_seo')->nullable();

            $table->string('h1')->nullable();
            $table->string('h2')->nullable();
            $table->text('intro')->nullable();
            $table->text('article')->nullable();
			$table->text('details_1')->nullable();
			$table->text('details_2')->nullable();

            $table->string('bread_name')->nullable();
            
            $table->string('prev_h1')->nullable();
            $table->string('prev_h2')->nullable();
            $table->string('prev_p')->nullable();
            $table->string('prev_image')->nullable();
            $table->string('prev_url')->nullable();

			$table->text('menu_kite')->nullable();

			// vars
			$table->string('param_report')->nullable();
			$table->string('param_duration')->nullable();
			$table->string('param_geo')->nullable();
			$table->string('param_price')->nullable();

			//
			$table->text('knot_1')->nullable();


			//		
			$table->unsignedBigInteger('category_id')->nullable();
            $table->index('category_id', 'item_category_idx');
            $table->foreign('category_id', 'item_category_fk')->on('categories')->references('id');
        
			$table->unsignedInteger('tag_id')->nullable();
            
            $table->unsignedBigInteger('group_id')->nullable();          
            $table->index('group_id', 'item_group_idx');
            $table->foreign('group_id', 'item_group_fk')->on('groups')->references('id');
           
            //
			$table->unsignedInteger('order')->default('50');
            $table->unsignedInteger('status')->default('1');
            $table->unsignedInteger('views')->default('1');
            $table->unsignedInteger('featured')->default('0');
            $table->unsignedInteger('published')->default('1');
			
            $table->unsignedInteger('mafia')->default('0');
	
			//
			$table->string('title')->nullable();
			$table->string('description')->nullable();
			$table->string('keywords')->nullable();

            $table->string('canonical')->nullable();
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
