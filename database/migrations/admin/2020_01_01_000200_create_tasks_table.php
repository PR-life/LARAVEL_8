<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->text('text_prev')->nullable();
            $table->text('text_fix')->nullable();

            $table->unsignedInteger('local_status')->default('100');
            $table->unsignedInteger('contractor_id')->nullable();
            $table->unsignedInteger('observer_id')->nullable();
            
            $table->unsignedBigInteger('oogway_id');
            $table->index('oogway_id', 'task_oogway_idx');
            $table->foreign('oogway_id')->references('id')->on('oogways');
			

			$table->foreignId('user_id')
				->default('1')
				->references('id')
				->on('users')
				->cascadeOnDelete();



			$table->unsignedInteger('order')->default('50');
            $table->unsignedInteger('status')->default('1');
            $table->unsignedInteger('published')->default('1');
			
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
        Schema::dropIfExists('tasks');
    }
}
