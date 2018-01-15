<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('doctors')){
            Schema::create('doctors', function (Blueprint $table) {
                $table->increments('id');
                $table->string('name');
                $table->string('position');
                $table->integer('age');
                $table->string('email');
                $table->string('contact_number');
                $table->integer('user_id')->unsigned();
                
                $table->foreign('user_id')->references('id')->on('users');

                $table->timestamps();
            });
         }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('companies');
    }
}
