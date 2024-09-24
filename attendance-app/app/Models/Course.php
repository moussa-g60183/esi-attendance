<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $primaryKey = 'sigle';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;
    protected $fillable = [
        'sigle', 'title'
    ];

    // Relation Many-to-Many
    public function students()
    {
        return $this->belongsToMany(Student::class, 'courses_students', 'course_sigle', 'student_matricule');
    }
}
