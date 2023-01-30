<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Post extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post', function (Blueprint $table){
            $table->increments('ID_post');
            $table->string('ID_mittente', 15)->index();
            $table->string('ID_destinatario', 15)->index();
            $table->date('data_post');
            $table->text('contenuto')->nullable();
            
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
        Schema::dropIfExists('post');
    }
}
