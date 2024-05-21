<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacesTable extends Migration
{

    public function up()
    {
        Schema::create('faces', function (Blueprint $table) {
            $table->id();
            $table->string('sku')->unique()->nullable();

            $table->string('name')->nullable();
            $table->string('surname')->nullable();
            $table->string('patronymic')->nullable();
            $table->date('birthday')->nullable();
            $table->string('gender')->nullable();
            // date
            // timestamp

            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('telegram')->nullable();
            $table->string('viber')->nullable();

            $table->string('public_contact')->nullable();


            //
            $table->string('country')->nullable();
            $table->string('city')->nullable();
            $table->string('area')->nullable();

            //
            $table->string('nickname')->nullable();
            $table->string('avatar')->nullable();

            //
            $table->string('estimation')->nullable();
            $table->string('reviews')->nullable();
            $table->string('posts')->nullable();
            
            $table->string('face_par_1')->nullable();
            $table->string('face_par_2')->nullable();
            $table->string('face_par_3')->nullable();

            $table->text('knot_1')->nullable();
            $table->text('note')->nullable();

            //
            $table->foreignId('face_id')
                ->nullable()
				->references('id')
				->on('faces')
				->cascadeOnDelete();


            $table->foreignId('crm_id')
                ->nullable()
				->references('id')
				->on('crm')
				->cascadeOnDelete();


            // $table->unsignedInteger('tag_id')->nullable();
            $table->foreignId('tag_id')
                ->nullable()
				->references('id')
				->on('tags');

            $table->unsignedBigInteger('category_id')->nullable();		
            $table->index('category_id', 'face_category_idx');
            $table->foreign('category_id', 'face_category_fk')->on('categories')->references('id');
        
            $table->unsignedBigInteger('group_id')->nullable();          
            $table->index('group_id', 'face_group_idx');
            $table->foreign('group_id', 'face_group_fk')->on('groups')->references('id');
           
			$table->foreignId('user_id')
				->default('1')
				->references('id')
				->on('users')
				->cascadeOnDelete();

            //
            $table->unsignedInteger('order')->default('50');
            $table->unsignedInteger('status')->default('1');
            $table->unsignedInteger('published')->default('1');
            
            $table->unsignedInteger('mafia')->default('0');
            

            //
            $table->timestamps();
			$table->softDeletes();
        });
    }


    public function down()
    {
        Schema::dropIfExists('faces');
    }
}
