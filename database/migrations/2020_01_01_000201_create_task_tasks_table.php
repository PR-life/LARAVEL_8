<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaskTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('task_tasks', function (Blueprint $table) {
            // $table->id();
            $table->unsignedBigInteger('task_id');
            $table->unsignedBigInteger('tasks_id');

            // IDX
            $table->index('task_id', 'task_tasks_task_idx'); // индекс из этой модели -> к модели Task
            $table->index('tasks_id', 'tasks_task_tasks_idx'); // индекс из этой модели -> к модели Task

            // FK
            $table->foreign('task_id', 'task_tasks_task_fk')->on('tasks')->references('id');
            $table->foreign('tasks_id', 'tasks_task_tasks_fk')->on('tasks')->references('id');

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
        Schema::dropIfExists('task_tasks');
    }
}
