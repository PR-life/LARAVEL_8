<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateNewServicesTable extends Migration
{

    public function up()
    {
        DB::statement('CREATE TABLE services LIKE papers');
		
    }

    public function down()
    {
        Schema::dropIfExists('services');
    }
}
