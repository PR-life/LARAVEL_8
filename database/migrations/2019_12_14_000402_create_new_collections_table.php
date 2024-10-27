<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateNewCollectionsTable extends Migration
{

    public function up()
    {
        DB::statement('CREATE TABLE collections LIKE categories');
		
    }

    public function down()
    {
        Schema::dropIfExists('collections');
    }
}
