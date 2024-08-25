<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateNewProductsTable extends Migration
{

    public function up()
    {
        DB::statement('CREATE TABLE products LIKE items');
		
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
}
