<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AccountType extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('account_type',function(Blueprint $table){
            $table->id();
            $table->string('account_type_id',100)->unique()->nullable(false);
            $table->char('entity_no',15)->unique()->nullable(false);
            $table->integer('scims_sys');
            $table->string('vamos_sys',100);
            $table->string('resbakuna_sys',100);
            $table->string('ikonsulta_sys',100);
            $table->string('doctrack_sys',100);
            $table->string('senior_sys',100);
            $table->string('joborder_sys',100);
            $table->string('barangay_sys',100);
            $table->string('let_sys',100);
            $table->string('pnp_sys',100);
            $table->timestamps();
            // $table->foreign('entity_no')->references('role_id')->on('role_management');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
     Schema::dropIfExists('account_type');
    }
}
