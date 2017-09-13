<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('common')->create('menu', function (Blueprint $table) {
            $table->increments('id');
            
            $table->integer('parent_id')->default(-1);
            $table->string('name')->default('')->comment('菜单名字');
            $table->string('url')->default('')->comment('url');
            $table->string('slug')->default('')->comment('菜单权限');
            $table->string('icon')->default('');
            $table->tinyInteger('status')->default(0)->commet('1.normal, 0.disabled');
            $table->tinyInteger('index')->default(0)->comment('排序index');

            $table->integer('created_at')->default(0);
            $table->integer('updated_at')->default(0);

            $table->index('parent_id');
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
        Schema::connection('common')->dropIfExists('menu');
    }
}
