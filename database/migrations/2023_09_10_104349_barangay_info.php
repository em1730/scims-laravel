<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BarangayInfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barangay_info',function(Blueprint $table){;
        $table->id();
        $table->string('barangay_id',100)->unique()->nullable(false);
        $table->string('barangay_code',100)->unique()->nullable(false);
        $table->longText('barangay_name');
        $table->integer('barangay_cityCode');
        $table->integer('barangay_provinceCode');
        $table->integer('barangay_regionCode');
        $table->string('barangay_islandGroupCode',10);
        $table->string('barangay_psgc10DigitCode',10);
        $table->string('barangay_logo',10);
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
        Schema::dropIfExists('barangay_info');
    }
}
