<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Utenti extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('utenti', function (Blueprint $table){
            
            $table->string('Username', 15);
            $table->primary('Username');
            $table->string('Nome', 25);
            $table->string('Cognome', 25);
            $table->string('email', 30);
            $table->string('password', 100);
            $table->date('datebirth');
            $table->string('luogodinascita', 100);
            $table->string('indirizzo', 50);
            $table->date('datamicizia');
            $table->string('descrizione', 1024)->nullable();
            $table->boolean('accessoblog');
            $table->string('role', 15);
            $table->json('amici')->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('utenti');
    }
}
