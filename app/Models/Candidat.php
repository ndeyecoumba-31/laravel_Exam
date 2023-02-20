<?php

namespace App\Models;
use App\Models\Formation;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidat extends Model
{
    protected $table = 'candidat';
    protected $primaryKey = 'id';
    protected $fillable = ['nom', 'prenom', 'email','age', 'niveauEtude', 'sexe'];

    public function formation()
    {
        return $this->belongsToMany(Formation::class ,'candidat_formation');
    }
}
