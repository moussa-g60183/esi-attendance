<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Student;
class StudentTest extends TestCase
{

    use RefreshDataBase;

    /** @test  */
    public function it_can_fetch_all_students(){
        $studentsAdded = Student::factory()->count(10)->create();

        $studentsReaded = Student::all();
        
        $this->assertCount(10,$studentsReaded);
    }
}
