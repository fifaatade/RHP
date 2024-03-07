<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidates extends Model
{
    //use HasFactory;

    protected $fillable = [
        'nom',
        'prenom',
        'universite',
        'filiere',
        'raison',
        'numero',
        'address',
        'passeTemps',
        'organisation_member',
        'profession',
        'organisationName' => 'nullable',
        'probleme',
        'projet',
        'secteur',
        'attente',
        'heard_about_project',
        'nameOther'=>'nullable',
        'profession',
        'argent',
        'nameProject',
        'binome',
        'binomeName',
        'nameSecteur'
    ];


}

