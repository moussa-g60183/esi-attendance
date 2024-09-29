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
        $students = Student::all();
        return view('livewire.add-student-form', [
            "students" => $students,
        ]);
    }

    public function attachStudent()
    {
        $student = Student::findOrFail($this->student_id);
        $course = Course::findOrFail($this->course_id);
        $course->students()->attach($student);
        $this->dispatch('student-added');
    }

    public function closeModal()
    {
        $this->dispatch('modal-closed');
    }
}
