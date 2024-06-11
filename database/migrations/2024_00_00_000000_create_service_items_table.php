<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_items', function (Blueprint $table) {
            $table->unsignedBigInteger('service_id');
            $table->unsignedBigInteger('item_id');

            // IDX
            $table->index('service_id', 'service_item_service_idx');
            $table->index('item_id', 'service_item_item_idx');

            // FK
            $table->foreign('service_id', 'service_item_service_fk')->on('services')->references('id')->onDelete('cascade');
            $table->foreign('item_id', 'service_item_item_fk')->on('items')->references('id')->onDelete('cascade');

            $table->unique(['service_id','item_id']);
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
        Schema::dropIfExists('service_items');
    }
}
