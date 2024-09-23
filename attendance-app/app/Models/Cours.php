<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cours extends Model
{
    use HasFactory;
    protected $primaryKey = 'sigle';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'sigle', 'title'
    ];

    // Relation Many-to-Many
    public function etudiants()
    {
        return $this->belongsToMany(Etudiant::class, 'cours_etudiants', 'cours_sigle', 'etudiant_matricule');
    }
}
