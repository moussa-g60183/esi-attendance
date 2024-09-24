<?php

use App\Livewire\AttendancePage;
use Illuminate\Support\Facades\Route;

Route::get('/', AttendancePage::class)->name('attendance');
