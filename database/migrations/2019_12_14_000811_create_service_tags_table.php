<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_tags', function (Blueprint $table) {
            // $table->id();
            $table->unsignedBigInteger('service_id');
            $table->unsignedBigInteger('tag_id');

            // IDX
            $table->index('service_id', 'service_tag_service_idx'); // индекс из этой модели -> к модели service
            $table->index('tag_id', 'service_tag_tag_idx'); // индекс из этой модели -> к модели Tag

            // FK
            $table->foreign('service_id', 'service_tag_service_fk')->on('services')->references('id')->onDelete('cascade');
            $table->foreign('tag_id', 'service_tag_tag_fk')->on('tags')->references('id')->onDelete('cascade');

            $table->unique(['service_id','tag_id']);
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
        Schema::dropIfExists('service_tags');
    }
}
