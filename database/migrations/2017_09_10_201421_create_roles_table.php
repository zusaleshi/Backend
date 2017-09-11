<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->increments('id');
            
            $table->string('name')->default('');
            $table->tinyint('state')->default(0)->comment('0.disabled, 1.enabled');
            $table->text('extra')->comment('这里放json');
            
            $table->integer('created_at')->default(0);
            $table->integer('updated_at')->default(0);

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
        Schema::dropIfExists('roles');
    }
}
