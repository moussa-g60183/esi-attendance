<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        // Ajout d'étudiants
        DB::table('etudiants')->insert([
            ['matricule' => '1234567890', 'nom' => 'Dupont', 'prenom' => 'Jean'],
            ['matricule' => '0987654321', 'nom' => 'Martin', 'prenom' => 'Sophie'],
            ['matricule' => '1122334455', 'nom' => 'Durand', 'prenom' => 'Pierre'],
        ]);

        // Ajout de cours
        DB::table('cours')->insert([
            ['sigle' => 'MATH101', 'title' => 'Mathématiques 101'],
            ['sigle' => 'PHYS101', 'title' => 'Physique 101'],
            ['sigle' => 'CHEM101', 'title' => 'Chimie 101'],
        ]);

        // Association des étudiants aux cours (table pivot)
        DB::table('cours_etudiants')->insert([
            // Jean Dupont est inscrit en Mathématiques et en Physique
            ['etudiant_matricule' => '1234567890', 'cours_sigle' => 'MATH101'],
            ['etudiant_matricule' => '1234567890', 'cours_sigle' => 'PHYS101'],

            // Sophie Martin est inscrite en Mathématiques et en Chimie
            ['etudiant_matricule' => '0987654321', 'cours_sigle' => 'MATH101'],
            ['etudiant_matricule' => '0987654321', 'cours_sigle' => 'CHEM101'],

            // Pierre Durand est inscrit en Physique et en Chimie
            ['etudiant_matricule' => '1122334455', 'cours_sigle' => 'PHYS101'],
            ['etudiant_matricule' => '1122334455', 'cours_sigle' => 'CHEM101'],
        ]);
    }

    public function down()
    {
        // Suppression des relations (table pivot)
        DB::table('cours_eleve')->whereIn('etudiant_matricule', ['1234567890', '0987654321', '1122334455'])->delete();

        // Suppression des étudiants
        DB::table('etudiants')->whereIn('matricule', ['1234567890', '0987654321', '1122334455'])->delete();

        // Suppression des cours
        DB::table('cours')->whereIn('sigle', ['MATH101', 'PHYS101', 'CHEM101'])->delete();
    }
};
