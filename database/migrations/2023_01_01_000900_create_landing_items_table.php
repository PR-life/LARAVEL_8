<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLandingItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('landing_items', function (Blueprint $table) {
            $table->unsignedBigInteger('landing_id');
            $table->unsignedBigInteger('item_id');

            $table->index('landing_id', 'landing_item_landing_idx');
            $table->index('item_id', 'landing_item_item_idx');

            $table->foreign('landing_id', 'landing_item_landing_fk')->on('landings')->references('id')->onDelete('cascade');
            $table->foreign('item_id', 'landing_item_item_fk')->on('items')->references('id')->onDelete('cascade');

            $table->unique(['landing_id','item_id']);
			$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('landing_items');
    }
}
