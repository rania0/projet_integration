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
        Schema::create('session_plat', function (Blueprint $table) {
            $table->unsignedBigInteger('ids'); // Clé étrangère référençant la table "session"
            $table->unsignedBigInteger('idp'); // Clé étrangère référençant la table "plats"

            // Définition des clés primaires composées
            $table->primary(['ids', 'idp']);

            // Définition des contraintes de clé étrangère
            $table->foreign('ids')->references('ids')->on('session');
            $table->foreign('idp')->references('id')->on('plats');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('session_plat');
    }
};
