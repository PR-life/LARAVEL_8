<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSmsTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sms_tags', function (Blueprint $table) {
            $table->unsignedBigInteger('sms_id');
            $table->unsignedBigInteger('tag_id');

            $table->index('sms_id', 'sms_tag_sms_idx');
            $table->index('tag_id', 'sms_tag_tag_idx');

            $table->foreign('sms_id', 'sms_tag_sms_fk')->on('sms')->references('id')->onDelete('cascade');
            $table->foreign('tag_id', 'sms_tag_tag_fk')->on('tags')->references('id')->onDelete('cascade');

            $table->unique(['sms_id','tag_id']);
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
        Schema::dropIfExists('sms_tags');
    }
}
