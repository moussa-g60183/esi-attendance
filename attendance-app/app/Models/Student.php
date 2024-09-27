<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Exception;
class Student extends Model
{
    use HasFactory;
    protected $primaryKey = 'matricule';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;
    protected $fillable = [
        'matricule', 'first_name', 'last_name'
    ];

    public function setMatriculeAttribute($value)
    {
        if ($value < 0) {
            throw new Exception('Le matricule ne peut pas être négatif.');
        }

        $this->attributes['matricule'] = $value;
    }

    public function courses()
    {
        return $this->belongsToMany(Course::class, 'courses_students', 'student_matricule', 'course_sigle');
    }
}
