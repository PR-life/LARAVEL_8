<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sms', function (Blueprint $table) {
            $table->id();
			$table->string('sku')->unique()->nullable();			

            $table->string('name');
            $table->string('contact')->nullable();
            
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('telegram')->nullable();
            $table->string('viber')->nullable();

            $table->string('country')->nullable();
            $table->string('city')->nullable();
            $table->string('area')->nullable();

            $table->text('sms')->nullable();
            $table->text('answer')->nullable();
            $table->text('answer_user_name')->nullable();
            
            $table->string('param_1')->nullable();
            $table->string('param_2')->nullable();
            $table->string('param_3')->nullable();

            $table->text('question_1')->nullable();
            $table->text('question_2')->nullable();
            $table->text('question_3')->nullable();
            $table->text('question_4')->nullable();
            
            //
            $table->string('type')->default('lead'); // callback ask
            $table->string('label')->default('email');

            //
            $table->string('id_item')->nullable();
            $table->string('from_page')->nullable();

            //
            $table->unsignedInteger('go_mod_talk')->default('0');

			$table->unsignedBigInteger('category_id')->nullable();          
            $table->index('category_id', 'sms_category_idx'); 
            $table->foreign('category_id', 'sms_category_fk')->on('categories')->references('id');

			//
            $table->foreignId('tag_id')
                ->nullable()
                ->references('id')
                ->on('tags');

            //
            $table->foreignId('group_id')
                ->nullable()
                ->references('id')
                ->on('groups');

            //
			$table->integer('views')->default('1');
			$table->unsignedInteger('order')->default('50');
            $table->unsignedInteger('status')->default('1');

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
        Schema::dropIfExists('sms');
    }
}
