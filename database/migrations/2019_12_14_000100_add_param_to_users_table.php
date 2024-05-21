<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddParamToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
			$table->after('remember_token', function ($table) {
				$table->string('nickname')->nullable();
				$table->string('rank')->nullable();
				$table->string('avatar')->nullable();

				$table->string('user_par_1')->nullable();
				$table->string('user_par_2')->nullable();
				$table->string('user_par_3')->nullable();
				//
				$table->unsignedInteger('order')->default('50');
				$table->unsignedInteger('status')->default('1');
				$table->unsignedInteger('published')->default('1');
				
				$table->unsignedInteger('mafia')->default('0');
			});


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
        Schema::table('users', function (Blueprint $table) {
			$table->dropColumn('nickname');
			$table->dropColumn('avatar');
			$table->dropColumn('user_par_1');
			$table->dropColumn('user_par_2');
			$table->dropColumn('user_par_3');
			$table->dropColumn('order');
			$table->dropColumn('status');
			$table->dropColumn('published');
			$table->dropColumn('mafia');
			$table->dropSoftDeletes();
		});
    }
}
