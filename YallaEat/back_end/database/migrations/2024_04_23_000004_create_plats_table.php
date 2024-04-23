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
        Schema::create('plats', function (Blueprint $table) {
            $table->bigIncrements('idp'); // Clé primaire auto-incrémentée
            $table->string('img'); // Champ pour stocker le chemin de l'image
            $table->string('nomp'); // Nom du plat (chaîne)
            $table->string('descp'); // Description du plat (chaîne)
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plats');
    }
};
