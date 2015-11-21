<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIssuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('issues', function (Blueprint $table) {
            $table->increments('id');
            $table->string('issueName');
            $table->integer('assignTo');
            $table->integer('priority');
            $table->integer('type');
            $table->integer('projectId');
            $table->string('dueDate');
//            $table->string('attachments');
            $table->enum('status', ['pending',  'in progress', 'for testing', 'completed', 'closed']);
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
        Schema::drop('issues');
    }
}
