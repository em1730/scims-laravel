<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RoleManagement extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Role Management
        Schema::create('role_management', function (Blueprint $table) {
            $table->id();
            $table->string('role_id')->unique()->nullable(false);
            $table->string('module',25)->nullable(false);
            $table->string('role',50)->nullable(false);
            $table->string('title',100)->nullable(false);
            $table->timestamps();
        });

        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('role_management');
    }
}
