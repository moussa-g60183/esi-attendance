<?php

namespace App\Http\Controllers;

use App\Models\Cours;
use Illuminate\Http\Request;

class CoursController extends Controller
{
 
     public function students($sigle)
     {
         $cours = Cours::where('sigle', $sigle)->firstOrFail();

         $etudiants = $cours->etudiants;
 

         return response()->json($etudiants);
     }

     public function courses(){
        $cours = Cours::all();

        return response()->json($cours);
     }

}
