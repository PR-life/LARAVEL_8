<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaperItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paper_items', function (Blueprint $table) {
            $table->unsignedBigInteger('paper_id');
            $table->unsignedBigInteger('item_id');

            // IDX
            $table->index('paper_id', 'paper_item_paper_idx');
            $table->index('item_id', 'paper_item_item_idx');

            // FK
            $table->foreign('paper_id', 'paper_item_paper_fk')->on('papers')->references('id')->onDelete('cascade');
            $table->foreign('item_id', 'paper_item_item_fk')->on('items')->references('id')->onDelete('cascade');

            $table->unique(['paper_id','item_id']);
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
        Schema::dropIfExists('paper_items');
    }
}
