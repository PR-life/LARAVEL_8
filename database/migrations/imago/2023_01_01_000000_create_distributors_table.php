<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDistributorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('distributors', function (Blueprint $table) {
            $table->id();
			$table->string('sku')->unique()->nullable();

            $table->string('name')->nullable();
            $table->string('company')->nullable();
            $table->string('person')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('www')->nullable();
            
			

            $table->string('avatar')->nullable();
            // $table->string('url_foto')->nullable();
			// $table->string('url_count')->nullable();

            $table->string('flag')->nullable();

            $table->string('country')->nullable();
            $table->string('city')->nullable();
            $table->string('addres')->nullable();
            

			// $table->string('h1')->nullable();
			$table->text('text')->nullable();
            $table->text('media')->nullable();
			
			$table->text('knot_1')->nullable();

			$table->unsignedInteger('order')->default(50);
            $table->unsignedInteger('status')->default(1);
            $table->unsignedInteger('views')->default('0');
            $table->unsignedInteger('featured')->default('0');
            $table->unsignedInteger('published')->default(1);


            //
			$table->foreignId('user_id')
				->default('1')
				->references('id')
				->on('users')
				->cascadeOnDelete();


			//
			$table->string('title')->nullable();
			$table->string('description')->nullable();
			$table->string('keywords')->nullable();

            //
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
        Schema::dropIfExists('distributors');
    }
}
