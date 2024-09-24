<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
   public function getAllStudents(){
    $Students = Student::all();
    return response()->json($Students);
   }

   public function show($matricule){
    $Student = Student::find($matricule);
    return response()->json($Student);
   }

}
