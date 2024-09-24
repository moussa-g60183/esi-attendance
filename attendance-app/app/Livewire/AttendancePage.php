<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

class AttendancePage extends Component
{

    #[Title('ESI Attendance')]

    public $selectedValue;
    public $data;
    public $students = [
        ["matricule" => "60534", "first_name" => "Gilles", "last_name" => "Chalon", "courses" => ["WEB5", "PRJ5"]],
        ["matricule" => "60183", "first_name" => "Moussa", "last_name" => "", "courses" => ["PRJ5", "SYS5"]]
    ];

    public function render()
    {
        $courses = [
            [
                "sigle" => "PRJ5",
                "title" => "Gestion de projet"
            ],
            [
                "sigle" => "WEB5",
                "title" => "Développement Web"
            ],
            [
                "sigle" => "SYS5",
                "title" => "Système d'exploitation"
            ]
        ];
        // dd($courses);
        return view('livewire.attendance-page', [
            "courses" => $courses,
        ]);
    }



    public function updatedSelectedValue($value)
    {
        // $this->data = Student::query
    }
}
