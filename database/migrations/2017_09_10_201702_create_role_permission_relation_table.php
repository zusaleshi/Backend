<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolePermissionRelationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection()->create('role_permission_relation', function (Blueprint $table) {
            $table->increments('id');
            
            $table->integer('user_id')->default(0);
            $table->integer('role_id')->default(0);

            $table->integer('created_at')->default(0);
            $table->integer('updated_at')->default(0);

            $table->index('user_id');
            $table->index('role_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('role_permission_relation');
    }
}
