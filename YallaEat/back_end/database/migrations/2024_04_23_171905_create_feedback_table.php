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
        Schema::create('feedback', function (Blueprint $table) {
            $table->id('idf'); // Clé primaire auto-incrémentée
            $table->unsignedBigInteger('idp'); // Clé étrangère référençant la table "plats"
            $table->string('avis'); // Avis (chaîne)
            $table->integer('etoile'); // Nombre d'étoiles (int)
            $table->timestamps(); // Colonnes created_at et updated_at

            // Définition de la relation d'agrégation
            $table->foreign('idp')->references('id')->on('plats');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('feedback');
    }
};
