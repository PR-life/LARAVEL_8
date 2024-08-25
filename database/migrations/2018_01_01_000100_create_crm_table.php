<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCrmTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crm', function (Blueprint $table) {
            $table->id();
            $table->string('sku')->unique()->nullable();

            $table->string('name');

			$table->unsignedInteger('order')->default(50);
            $table->unsignedInteger('status')->default(1);
            $table->unsignedInteger('published')->default(1);
			
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
        Schema::dropIfExists('crm');
    }
}
