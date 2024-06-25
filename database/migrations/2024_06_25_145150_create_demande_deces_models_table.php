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
        Schema::create('demande_deces_models', function (Blueprint $table) {
            $table->id();
            $table->string('date_naissance');
            $table->string('nom_pere');
            $table->string('nom_mere');
            $table->string('numero_registre');
            $table->string('centre');
            $table->string('date_deces');
            $table->string('lieu_deces');
            $table->string('status');

            $table->string('sexe');
            $table->foreignIdFor(Demandeur::class);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('demande_deces_models');
    }
};
