<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('vote_plats', function (Blueprint $table) {
            $table->id('idpv'); // Clé primaire auto-incrémentée
            $table->unsignedBigInteger('idE'); // Clé étrangère référençant la table "etudiants"
            $table->unsignedBigInteger('idP'); // Clé étrangère référençant la table "plats"
            $table->integer('nbvote'); // Nombre de votes (int)
            $table->timestamps(); // Colonnes created_at et updated_at

            // Définition des contraintes de clé étrangère
            $table->foreign('idE')->references('id')->on('etudiants');
            $table->foreign('idP')->references('id')->on('plats');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vote_plats');
    }
};
