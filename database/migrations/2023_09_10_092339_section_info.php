<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SectionInfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('section_info',function(Blueprint $table){
        $table->id();
        $table->string('section_id',100)->unique()->nullable(false);
        $table->string('department_id',100)->nullable(false);
        $table->string('division_id',100)->nullable(false);
        $table->string('section_code',50)->nullable(false);
        $table->longText('section_name');
        $table->timestamps();
        $table->foreign('department_id')->references('department_id')->on('department_info')->onDelete('cascade')->onUpdate('cascade');
        $table->foreign('division_id')->references('division_id')->on('division_info')->onDelete('cascade')->onUpdate('cascade');

      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::dropIfExists('section_info');
    }
}
