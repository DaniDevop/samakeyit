<?php

use App\Models\Demandeur;
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
        Schema::create('demande_acte_naissances', function (Blueprint $table) {
            $table->id();
            $table->string('numero_registe');
            $table->string('nom_pere');
            $table->string('nom_mere');
            $table->string('annee_de_naissance');
            $table->string('departement');
            $table->foreignIdFor(Demandeur::class);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('demande_acte_naissances');
    }
};
