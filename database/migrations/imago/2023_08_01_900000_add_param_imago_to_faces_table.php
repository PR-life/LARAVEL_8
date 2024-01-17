<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddParamImagoToFacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('faces', function (Blueprint $table) {
			$table->after('email', function ($table) {
                $table->string('public_contact')->nullable();
                $table->string('public_url')->nullable();
			});
			$table->after('location', function ($table) {
                $table->string('achievement')->nullable();
                $table->string('year_using_device')->nullable();
                $table->string('apk')->nullable();
			});
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('faces', function (Blueprint $table) {
			$table->dropColumn('public_contact');
			$table->dropColumn('public_url');
			$table->dropColumn('achievement');
			$table->dropColumn('year_using_device');
			$table->dropColumn('apk');
		});
    }
}
