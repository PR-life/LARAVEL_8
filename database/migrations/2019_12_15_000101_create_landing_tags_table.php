<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLandingTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('landing_tags', function (Blueprint $table) {
            $table->unsignedBigInteger('landing_id');
            $table->unsignedBigInteger('tag_id');

            $table->index('landing_id', 'landing_tag_landing_idx');
            $table->index('tag_id', 'landing_tag_tag_idx');

            $table->foreign('landing_id', 'landing_tag_landing_fk')->on('landings')->references('id')->onDelete('cascade');
            $table->foreign('tag_id', 'landing_tag_tag_fk')->on('tags')->references('id')->onDelete('cascade');

            $table->unique(['landing_id','tag_id']);
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
        Schema::dropIfExists('landing_tags');
    }
}
