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
        Schema::create('demande_mariages', function (Blueprint $table) {
            $table->id();
            $table->string('numero_registre_mariage');
            $table->string('centre');
            $table->string('date_mariage');
            $table->string('lieu_mariage');
            $table->string('date_naissance_marie');
            $table->string('date_naissance_mariee');
            $table->string('regime_matrimonial');
            $table->string('polygamie_monogamie');
            $table->string('status');
            $table->string('piece')->nullable();

            $table->foreignIdFor(Demandeur::class);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('demande_mariages');
    }
};
