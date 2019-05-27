<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Enigmes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enigmes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom');
            $table->text('libelle');
            $table->string('code_reponse');
            $table->unsignedInteger('equipe_id');
            $table->foreign('equipe_id')->references('id')->on('equipes');
            $table->timestamp('created_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enigmes');
    }
}
