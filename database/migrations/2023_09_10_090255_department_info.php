<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DepartmentInfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('department_info',function(Blueprint $table){
        $table->id();
        $table->string('department_id',100)->unique()->nullable(false);
        $table->string('department_code',100)->nullable(false);
        $table->longText('department_name');
        $table->string('department_logo',50)->default('scc_logo.jpg');
        $table->char('department_tel_no',20);
        $table->string('department_email_add',50);
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
      Schema::dropIfExists('department_info');
    }
}
