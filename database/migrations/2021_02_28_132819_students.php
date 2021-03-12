<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Students extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
        $table->increments('id');
        $table -> string ('lastname');('lastname');
        $table -> string('firstname'); ('firstname');
        $table -> string('middlename'); ('middlename');
        $table -> date ('birthdate'); ('birthdate');
        $table -> string('sex'); ('sex');
        $table -> longText('address');('address');
        $table -> string('phone');('phone');      
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
        //
    }
}
