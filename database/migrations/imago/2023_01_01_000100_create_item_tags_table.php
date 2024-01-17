<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_tags', function (Blueprint $table) {
            $table->unsignedBigInteger('item_id');
            $table->unsignedBigInteger('tag_id');

            $table->index('item_id', 'item_tag_item_idx');
            $table->index('tag_id', 'item_tag_tag_idx');

            $table->foreign('item_id', 'item_tag_item_fk')->on('items')->references('id')->onDelete('cascade');
            $table->foreign('tag_id', 'item_tag_tag_fk')->on('tags')->references('id')->onDelete('cascade');

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
        Schema::dropIfExists('item_tags');
    }
}
