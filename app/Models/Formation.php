<?php

namespace App\Models;
use App\Models\Candidat;
use App\Models\Referentiel;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    protected $table = 'formation';
    protected $primaryKey = 'id';
    protected $fillable = ['nom', 'duree', 'description','isStarted','date_debut','referentiel_id'];

    public function candidat()
    {
        return $this->belongsToMany(Candidat::class ,'candidat_formation');
    }
    public function referentiel()
    {
        return $this->belongsTo(Referentiel::class);
    }
}
