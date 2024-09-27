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

    /** @test  */
    public function it_can_add_a_classic_student()
    {
        // Création d'un étudiant classique
        $student = Student::create([
            'matricule' => '1',
            'first_name' => 'SpongeBob',
            'last_name' => 'SquarePants',
        ]);

        // Vérification que l'étudiant est bien ajouté dans la base de données
        $this->assertDatabaseHas('students', [
            'matricule' => '1',
            'first_name' => 'SpongeBob',
            'last_name' => 'SquarePants',
        ]);
    }

    /** @test  */
    public function it_throws_an_exception_for_existing_matricule()
    {
        // Création du premier étudiant
        Student::create([
            'matricule' => '1',
            'first_name' => 'SpongeBob',
            'last_name' => 'SquarePants',
        ]);

        // On s'attend à une exception lorsqu'on essaie d'ajouter un étudiant avec le même matricule
        $this->expectException(\Illuminate\Database\QueryException::class);

        Student::create([
            'matricule' => '1',
            'first_name' => 'SpongeBob',
            'last_name' => 'SquarePants',
        ]);
    }

    /** @test */
    public function it_throws_an_exception_for_negative_matricule()
    {
        // On s'attend à une exception lorsqu'on essaie d'ajouter un étudiant avec un matricule négatif
        $this->expectException(\Exception::class);

        Student::create([
            'matricule' => '-1',
            'first_name' => 'SpongeBob',
            'last_name' => 'SquarePants',
        ]);
    }
}
