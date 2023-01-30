<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Associazione extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('associazione', function (Blueprint $table){
           $table->increments('ID_associazione');
           $table->string('ID_utente', 15)->index();
           $table->integer('ID_gruppo')->unsigned()->index();
           
           $table->foreign('ID_utente')->references('Username')->on('utenti')->onDelete('cascade')->onUpdate('cascade');
         $table->foreign('ID_gruppo')->references('ID_gruppo')->on('gruppo')->onDelete('cascade')->onUpdate('cascade');
           

           
           
       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('associazione');
    }
}
