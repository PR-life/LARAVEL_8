<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSmsCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sms_categories', function (Blueprint $table) {
            $table->unsignedBigInteger('sms_id');
            $table->unsignedBigInteger('category_id');

            $table->index('sms_id', 'sms_category_sms_idx');
            $table->index('category_id', 'sms_category_category_idx');

            $table->foreign('sms_id', 'sms_category_sms_fk')->on('sms')->references('id')->onDelete('cascade');
            $table->foreign('category_id', 'sms_category_category_fk')->on('categories')->references('id')->onDelete('cascade');

            $table->unique(['sms_id','category_id']);
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
        Schema::dropIfExists('sms_categories');
    }
}
