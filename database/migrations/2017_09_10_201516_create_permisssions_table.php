<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermisssionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permissions', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name')->default('');
            $table->string('slug')->default('');
            $table->string('module')->default('')->comment('所属模块');
            $table->string('url')->default('');
            $table->tinyint('state')->default(0)->comment('0.disabled, 1.enabled');

            $table->integer('created_at')->default(0);
            $table->integer('updated_at')->default(0);

            $table->unique('name');
            $table->unique('slug');
            $table->unique('url');
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
        Schema::dropIfExists('permissions');
    }
}
