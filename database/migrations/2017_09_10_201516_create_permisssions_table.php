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
        Schema::connection('common')->create('permissions', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name', 128)->default('');
            $table->string('slug', 128)->default('');
            $table->string('module', 64)->default('')->comment('所属模块');
            $table->string('url', 128)->default('');
            $table->tinyInteger('status')->default(0)->comment('0.disabled, 1.enabled');

            $table->integer('created_at')->default(0);
            $table->integer('updated_at')->default(0);

            $table->unique('name');
            $table->unique('slug');
            $table->unique('url');
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
        Schema::connection('common')->dropIfExists('permissions');
    }
}
