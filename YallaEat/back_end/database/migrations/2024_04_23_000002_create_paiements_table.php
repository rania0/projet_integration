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
        Schema::create('paiements', function (Blueprint $table) {
            $table->id(); // Clé primaire auto-incrémentée
            $table->foreignId('numCin')->constrained('etudiants'); // Clé étrangère référençant la table "etudiants"
            $table->string('methode'); // Méthode de paiement (par exemple, carte de crédit, espèces)
            $table->double('montant'); // Montant du paiement
            $table->string('qrcode'); // Code QR (représentation en chaîne)
            $table->timestamps(); // Colonnes created_at et updated_at
            // $table->timestamp('failed_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paiements');
    }
};
