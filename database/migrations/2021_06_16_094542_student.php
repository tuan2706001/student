<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Student extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student', function (Blueprint $table) {
            $table->increments('idStudent');
            $table->string('nameStudent', 150);
            $table->string('username', 50)->unique();
            $table->string('passWord', 50);
            $table->date('DoB');
            $table->string('email', 150)->unique();
            $table->char('phone', 10)->unique();
            $table->unsignedInteger('idGrade');
            $table->foreign('idGrade')->references('idGrade')->on('grade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('student');
    }
}
