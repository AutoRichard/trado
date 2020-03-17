<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlantationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plantations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('plantation');
            $table->text('description');
            $table->string('image');
            $table->integer('percentage'); 
            $table->bigInteger('goals');
            $table->integer('duration'); 
            $table->integer('unit');  
            $table->integer('r_unit');    
            $table->text('location');       
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
        Schema::dropIfExists('plantations');
    }
}
