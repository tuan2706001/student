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
            $table->string('lastName', 30);
            $table->string('firstName', 30);
            $table->string('email', 150)->unique();
            $table->string('passWord', 50);
            $table->date('DoB');
            $table->boolean("gender");
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
