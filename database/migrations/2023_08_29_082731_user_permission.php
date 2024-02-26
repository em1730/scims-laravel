<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UserPermission extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('user_permission',function(Blueprint $table){
              $table->id();
              $table->string('permission_id',100)->unique()->nullable(false);
              $table->string('role_id',50)->nullable(false);
              $table->string('object',25)->nullable(false);
              $table->string('permission',25)->nullable(false);
              $table->timestamps();
              $table->foreign('role_id')->references('role_id')->on('role_management');
         });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_permission');
    }
}
