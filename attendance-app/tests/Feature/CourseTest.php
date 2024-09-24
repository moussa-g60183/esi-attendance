<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Course;
use App\Models\Student;


class CourseTest extends TestCase
{
    use RefreshDataBase;

    /** @test  */
    public function it_can_fetch_all_students_from_course(){
        $studentsAdded = Student::factory()->count(10)->create();
        $course = Course::factory()->create();
        $course->students()->attach($studentsAdded->pluck('matricule'));
        $this->assertCount(10,$course->students);
    }


}
