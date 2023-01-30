<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Messaggio extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messaggio', function (Blueprint $table){
            
            $table->increments('ID_messaggio');
            $table->string('ID_mittente', 15)->index();
            $table->string('ID_destinatario', 15)->index();
            $table->text('Contenuto')->nullable();
            $table->date('Data_messaggio');
            
            $table->foreign('ID_mittente')->references('Username')->on('utenti')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('ID_destinatario')->references('Username')->on('utenti')->onDelete('cascade')->onUpdate('cascade');

            
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('messaggio');
    }
}
