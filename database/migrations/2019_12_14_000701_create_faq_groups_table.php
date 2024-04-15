<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFaqGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faq_groups', function (Blueprint $table) {
            $table->unsignedBigInteger('faq_id');
            $table->unsignedBigInteger('group_id');

            $table->index('faq_id', 'faq_group_faq_idx');
            $table->index('group_id', 'faq_group__idx');

            $table->foreign('faq_id', 'faq_group_faq_fk')->on('faqs')->references('id');
            $table->foreign('group_id', 'faq_group_group_fk')->on('groups')->references('id');

            $table->unique(['faq_id','group_id']);
			$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('faq_groups');
    }
}
