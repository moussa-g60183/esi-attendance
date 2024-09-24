<?php

namespace App\Livewire;

use Livewire\Component;

class AttendancePage extends Component
{
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
        return view('livewire.attendance-page');
    }
}
