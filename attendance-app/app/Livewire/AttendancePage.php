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



    public function updatedSelectedValue($value)
    {
        $this->data = Student::whereHas('courses', function ($query) use ($value) {
            $query->where('sigle', $value);
        })->orderBy('matricule')->get();
    }
}
