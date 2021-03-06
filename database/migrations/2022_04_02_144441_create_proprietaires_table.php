<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proprietaires', function (Blueprint $table) {
            $table->id();
            $table->integer('CodeProprietaire')->unique();
            $table->string('Nom_proprietaire');
            $table->string('Prenom_proprietaire');
            $table->date('Date_naissance');
            $table->string('Lieu_naissance');
            $table->bigInteger('code_piece_identite');
            $table->bigInteger('Numero_piece_identite');
            $table->string('Adresse');
            $table->string('Email');
            
            $table->foreignId('id_genre')
            ->constrained('genres')
            ->onUpdate('cascade')
            ->onDelete('cascade');
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
        Schema::dropIfExists('proprietaires');
    }
};
