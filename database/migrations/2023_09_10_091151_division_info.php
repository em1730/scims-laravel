<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DivisionInfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('division_info',function(Blueprint $table){
            $table->id();
            $table->string('division_id',100)->unique()->nullable(false);
            $table->string('department_id',100)->nullable(false);
            $table->string('division_code',100)->nullable(false);
            $table->longText('division_name');
            $table->string('division_logo',50)->default('scc_logo.jpg');
            $table->char('division_tel_no',20);
            $table->string('division_email_add',50);
            $table->timestamps();
            $table->foreign('department_id')->references('department_id')->on('department_info')
            ->onDelete('cascade')
            ->onUpdate('cascade');

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::dropIfExists('division_info');
    }
}
