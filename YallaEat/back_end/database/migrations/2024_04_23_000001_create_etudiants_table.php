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
        Schema::create('etudiants', function (Blueprint $table) {
            $table->id(); // Clé primaire auto-incrémentée
            $table->integer('numCin')->unique(); // Contrainte d'unicité
            $table->string('nom');
            $table->string('prenom');
            $table->string('mail')->unique(); // Contrainte d'unicité
            $table->string('motpass');
            $table->string('allergies')->nullable(); // Champ facultatif
            $table->string('etablissement')->nullable(); // Champ facultatif
            $table->boolean('foyer')->default(false); // Valeur par défaut
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('etudiants');
    }
};
