<?php

namespace App\Livewire;

use App\Models\Course;
use App\Models\Student;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\On;


class AttendancePage extends Component
{
    #[Title('ESI Attendance')]

    public $selectedValue = '';
    public $data;
    public $showAddForm = false;

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
    #[On('student-updated')]
    public function updatedSelectedValue()
    {
        $this->data = Student::whereHas('courses', function ($query) {
            $query->where('sigle', $this->selectedValue);
        })->orderBy('matricule')->get();
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
        $this->dispatch('student-updated');
    }

    #[On('modal-closed')]
    public function toggleModal()
    {
        $this->showAddForm = !$this->showAddForm;
    }
}
