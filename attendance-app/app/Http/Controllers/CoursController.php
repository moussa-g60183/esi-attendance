<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
 
     public function students($sigle)
     {
         $Course = Course::where('sigle', $sigle)->firstOrFail();

         $students = $Course->students;
 

         return response()->json($studentss);
     }

     public function Coursees(){
        $Course = Course::all();

        return response()->json($Course);
     }

}
