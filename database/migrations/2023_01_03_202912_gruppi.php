<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Gruppi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gruppo', function (Blueprint $table){
            
            $table->increments('ID_gruppo');
            $table->string('Nome_gruppo', 15);
            $table->date('data_creazione');
            $table->integer('n_componenti')->unsigned();
            $table->boolean('aperto_chiuso');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gruppo');
    }
}
