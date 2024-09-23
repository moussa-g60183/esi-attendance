<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    protected $primaryKey = 'matricule';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'matricule', 'nom', 'prenom'
    ];

    public function cours()
    {
        return $this->belongsToMany(Cours::class, 'cours_etudiants', 'etudiant_matricule', 'cours_sigle');
    }
}
