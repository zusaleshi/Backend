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
            $table->increments('id');

            $table->string('username')->default('');
            $table->string('truename')->default('');
            $table->string('email')->default('');
            $table->string('mobile')->default('');
            $table->string('password')->default('');
            $table->string('salt')->default('');
            $table->tinyint('state')->default(0)->comment('0.disabled， 1.enabled');
            
            $table->integer('created_at')->default(0);
            $table->integer('updated_at')->default(0);

            $table->unique('username');
            $table->unique('email');
            $table->unique('mobile');
            $table->index('state');
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
