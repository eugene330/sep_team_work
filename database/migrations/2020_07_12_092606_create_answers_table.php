<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answers', function (Blueprint $table) {
            $table->increments('id');
            $table->text('text');
            $table->smallInteger('rate');
            $table->integer('student_user_id')->unsigned();
            $table->integer('task_id')->unsigned();

            $table->foreign('student_user_id')
                ->references('id')
                ->on('users');
            $table->foreign('task_id')
                ->references('id')
                ->on('tasks');

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
        Schema::dropIfExists('answers');
    }
}
