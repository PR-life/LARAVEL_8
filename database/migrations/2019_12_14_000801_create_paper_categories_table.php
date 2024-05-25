<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaperCategoriesTable extends Migration
{

    
    public function up()
    {
        Schema::create('paper_categories', function (Blueprint $table) {
            $table->unsignedBigInteger('paper_id');
            $table->unsignedBigInteger('category_id');

            $table->index('paper_id', 'paper_category_category_idx');
            $table->index('category_id', 'paper_category_paper_idx');

            $table->foreign('paper_id', 'paper_category_category_fk')->on('papers')->references('id')->onDelete('cascade');
            $table->foreign('category_id', 'paper_category_paper_fk')->on('categories')->references('id')->onDelete('cascade');

            $table->unique(['paper_id','category_id']);
            
			$table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('paper_categories');
    }
}
