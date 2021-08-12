<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Mark extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mark', function (Blueprint $table) {
            $table->unsignedInteger('idStudent');
            $table->foreign('idStudent')->references('idStudent')->on('student');
            $table->unsignedInteger('idSubject');
            $table->foreign('idSubject')->references('idSubject')->on('subject');
            $table->primary(['idStudent', 'idSubject']);
            $table->float('final1', 2, 2);
            $table->float('final2', 2, 2);
            $table->float('skill1', 2, 2);
            $table->float('skill2', 2, 2);



            //$table->primary();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('mark');
    }
}
