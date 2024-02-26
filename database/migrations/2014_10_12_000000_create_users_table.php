<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_accounts', function (Blueprint $table) {
            $table->id();
            $table->string('entity_no',100)->unique()->nullable(false);
            $table->string('user_id',100)->unique()->nullable(false);
            $table->string('username',50)->nullable(false);
            $table->string('job_position',50);
            $table->string('password')->nullable(false);
            $table->string('fullname',50);
            $table->string('department',100);
            $table->string('division',100);
            $table->rememberToken();
            $table->timestamps();
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
