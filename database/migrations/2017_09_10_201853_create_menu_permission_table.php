<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenuPermissionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('common')->create('menu_permission_relation', function (Blueprint $table) {
            $table->increments('id');
            
            $table->integer('menu_id')->default(-1);
            $table->integer('permission_id')->default(-1);

            $table->integer('created_at')->default(0);
            $table->integer('updated_at')->default(0);

            $table->index('menu_id');
            $table->index('permission_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('common')->dropIfExists('menu_permission_relation');
    }
}
