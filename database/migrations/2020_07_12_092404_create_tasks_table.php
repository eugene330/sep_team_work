<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->increments('id');
            //$table->dateTime('finish_date');
            $table->timestamp('finish_date');
            $table->text('text');
            $table->boolean('arhiv');
            $table->integer('group_id')->unsigned();
            $table->integer('student_user_id')->unsigned();

            $table->foreign('group_id')
                ->references('id')
                ->on('groups');
            $table->foreign('student_user_id')
                ->references('id')
                ->on('users');

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
        Schema::dropIfExists('tasks');
    }
}
