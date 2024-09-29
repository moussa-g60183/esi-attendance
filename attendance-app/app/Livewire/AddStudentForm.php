<?php

namespace App\Livewire;

use App\Models\Course;
use App\Models\Student;
use Livewire\Component;

class AddStudentForm extends Component
{
    public $course_id;
    public $student_id;
    public function render()
    {
        $students = Student::whereDoesntHave('courses', function ($query) {
            $query->where('sigle', $this->course_id);
        })->orderBy('matricule')->get();
        return view('livewire.add-student-form', [
            "students" => $students,
        ]);
    }

    public function attachStudent()
    {
        $student = Student::findOrFail($this->student_id);
        $course = Course::findOrFail($this->course_id);
        $course->students()->attach($student);
        $this->dispatch('student-updated');
        $this->student_id = null;
    }

    public function closeModal()
    {
        $this->dispatch('modal-closed');
    }
}
