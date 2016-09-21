<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePasien extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient', function(Blueprint $table){
            $table->increments('id');
            $table->string('name_p');
            $table->string('tem_lahir_p');
            $table->date('tgl_lahir_p');
            $table->string('agama_p');
            $table->string('jk_p');
            $table->string('kd_rm_p');
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
    }
}
