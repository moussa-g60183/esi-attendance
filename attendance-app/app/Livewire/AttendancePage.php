<?php

namespace App\Livewire;

use App\Models\Course;
use App\Models\Student;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Component;
use Livewire\Attributes\Title;


class AttendancePage extends Component
{

    #[Title('ESI Attendance')]

    public $selectedValue;
    public $data;

    public function render()
    {
        // Course::factory()->count(10)->create();
        // Student::factory()->count(10)->create();
        $courses = Course::all();
        return view('livewire.attendance-page', [
            "courses" => $courses,
        ]);
    }

    /**
     * Update the data to display depending on the selected value
     * @param mixed $value Selected value of the select element
     * @return void
     */
    public function updatedSelectedValue($value)
    {
        $this->data = Student::whereHas('courses', function ($query) use ($value) {
            $query->where('sigle', $value);
        })->get();
    }

    /**
     * Delete a student from a course students list.
     * Prevent the default handling of the form
     * @return void
     */
    public function deleteStudent($matricule)
    {
        $student = Student::findOrFail($matricule);
        $course = Course::findOrFail($this->selectedValue);
        $course->students()->detach($student);
    }

    /**
     * Add a student to a course students list
     * Prevent the default handling of the form
     * @return void
     */
    public function addStudent() {}
}
