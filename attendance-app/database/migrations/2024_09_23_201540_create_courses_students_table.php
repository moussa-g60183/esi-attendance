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
        Schema::create('courses_students', function (Blueprint $table) {
            $table->string('student_matricule', 10);
            $table->string('course_sigle', 10);
    
            // Clés étrangères
            $table->foreign('student_matricule')->references('matricule')->on('students')->onDelete('cascade');
            $table->foreign('course_sigle')->references('sigle')->on('courses')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses_students');
    }
};
