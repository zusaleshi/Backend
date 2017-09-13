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
        Schema::connection('common')->create('users', function (Blueprint $table) {
            $table->increments('id');

            $table->string('username', 128)->default('');
            $table->string('truename', 128)->default('');
            $table->string('email', 128)->default('');
            $table->string('mobile', 128)->default('');
            $table->string('password')->default('');
            $table->string('salt')->default('');
            $table->tinyInteger('status')->default(0)->comment('0.disabled， 1.enabled');
            
            $table->integer('created_at')->default(0);
            $table->integer('updated_at')->default(0);

            $table->unique('username');
            $table->unique('email');
            $table->unique('mobile');
            $table->index('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('common')->dropIfExists('users');
    }
}
