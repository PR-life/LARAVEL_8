<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTagsTable extends Migration
{
    public function up()
    {
        Schema::create('tags', function (Blueprint $table) {
            $table->id();
            $table->string('sku')->unique()->nullable();

            $table->string('name')->unique();
            $table->string('slug')->unique();

            $table->foreignId('group_id')
                ->nullable()
                ->references('id')
                ->on('groups');

            $table->string('name_2')->nullable();
            $table->string('name_3')->nullable();
            $table->string('name_4')->nullable();
            $table->string('name_5')->nullable();
            $table->string('name_6')->nullable();
            $table->string('name_7')->nullable();
            $table->string('name_8')->nullable();

			$table->unsignedInteger('order')->default('50');
            $table->unsignedInteger('status')->default('1');
            $table->unsignedInteger('published')->default('1');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tags');
    }
}
