<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
   public function getAllStudents(){
    $etudiants = Etudiant::all();
    return response()->json($etudiants);
   }

   public function show($matricule){
    $etudiant = Etudiant::find($matricule);
    return response()->json($etudiant);
   }

}
