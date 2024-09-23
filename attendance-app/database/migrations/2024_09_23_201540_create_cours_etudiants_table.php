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
        Schema::create('cours_etudiants', function (Blueprint $table) {
            $table->string('etudiant_matricule', 10);
            $table->string('cours_sigle', 10);
    
            // Clés étrangères
            $table->foreign('etudiant_matricule')->references('matricule')->on('etudiants')->onDelete('cascade');
            $table->foreign('cours_sigle')->references('sigle')->on('cours')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cours_etudiants');
    }
};
