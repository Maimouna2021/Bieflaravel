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
        Schema::create('proprietes', function (Blueprint $table) {
            $table->id();
            $table->string('Adresse_propriete');
            $table->integer('Superficie');
            $table->integer('Nbre_etage');
            $table->foreignId('id_proprietaire')
            ->constrained('proprietaires')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreignId('id_type_propriete')
            ->constrained('type_proprietes')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreignId('id_quartier')
            ->constrained('quartiers')
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
        Schema::dropIfExists('proprietes');
    }
};
