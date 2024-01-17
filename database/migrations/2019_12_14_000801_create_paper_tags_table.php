<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaperTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paper_tags', function (Blueprint $table) {
            // $table->id();
            $table->unsignedBigInteger('paper_id');
            $table->unsignedBigInteger('tag_id');

            // IDX
            $table->index('paper_id', 'paper_tag_paper_idx'); // индекс из этой модели -> к модели Paper
            $table->index('tag_id', 'paper_tag_tag_idx'); // индекс из этой модели -> к модели Tag

            // FK
            $table->foreign('paper_id', 'paper_tag_paper_fk')->on('papers')->references('id')->onDelete('cascade');
            $table->foreign('tag_id', 'paper_tag_tag_fk')->on('tags')->references('id')->onDelete('cascade');

            $table->unique(['paper_id','tag_id']);
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
        Schema::dropIfExists('paper_tags');
    }
}
