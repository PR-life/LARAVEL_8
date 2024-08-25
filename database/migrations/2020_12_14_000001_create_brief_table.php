<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBriefTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brief', function (Blueprint $table) {
            $table->id();
			$table->string('sku')->nullable();			
			// $table->string('sku')->unique()->nullable();			

            $table->string('name')->nullable();
            $table->string('from_page')->nullable();
            
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('telegram')->nullable();
            $table->string('viber')->nullable();

            $table->string('country')->nullable();
            $table->string('city')->nullable();
            $table->string('area')->nullable();
           
            $table->string('q1_name')->nullable();
            $table->string('q1')->nullable();
            $table->string('q2_name')->nullable();
            $table->string('q2')->nullable();
            $table->string('q3_name')->nullable();
            $table->string('q3')->nullable();
            $table->string('q4_name')->nullable();
            $table->string('q4')->nullable();
            $table->string('q5_name')->nullable();
            $table->string('q5')->nullable();
            $table->string('q6_name')->nullable();
            $table->string('q6')->nullable();
            $table->string('q7_name')->nullable();
            $table->string('q7')->nullable();
            $table->string('q8_name')->nullable();
            $table->string('q8')->nullable();
            $table->string('q9_name')->nullable();
            $table->string('q9')->nullable();
            $table->string('q10_name')->nullable();
            $table->string('q10')->nullable();
            $table->string('q11_name')->nullable();
            $table->string('q11')->nullable();
            $table->string('q12_name')->nullable();
            $table->string('q12')->nullable();


            $table->string('v1_name')->nullable();
            $table->string('v1')->nullable();
            $table->string('v2_name')->nullable();
            $table->string('v2')->nullable();
            $table->string('v3_name')->nullable();
            $table->string('v3')->nullable();
            $table->string('v4_name')->nullable();
            $table->string('v4')->nullable();
            $table->string('v5_name')->nullable();
            $table->string('v5')->nullable();
            $table->string('v6_name')->nullable();
            $table->string('v6')->nullable();

            //
            $table->string('type')->default('lead'); // callback ask
            $table->string('label')->default('email');

			$table->unsignedBigInteger('category_id')->nullable();          
            $table->index('category_id', 'brief_category_idx'); 
            $table->foreign('category_id', 'brief_category_fk')->on('categories')->references('id');

            //
			$table->unsignedInteger('order')->default(50);
            $table->unsignedInteger('status')->default(1);

            $table->unsignedInteger('pin')->nullable()->default(0);
            $table->unsignedInteger('featured')->default('0');
            $table->unsignedInteger('published')->default('0');
			
            $table->unsignedInteger('mafia')->default('0');

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
        Schema::dropIfExists('brief');
    }
}
