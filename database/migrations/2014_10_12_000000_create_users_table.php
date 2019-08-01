<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('username');
            $table->string('emp_id');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('experience');
            $table->date('joining_date');
            $table->date('leaving_date');
            $table->boolean('gender');
            $table->string('salary');
            $table->date('dob');
            $table->string('address');
            $table->string('designation');
            $table->string('token');
            $table->integer('active')->default(1);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
