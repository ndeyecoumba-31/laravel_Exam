<?php

namespace App\Models;
use App\Models\Referentiel;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $table = 'type';
    protected $primaryKey = 'id';
    protected $fillable = ['libelle'];

    public function referentiel()
    {
        return $this->hasMany(Referentiel::class);
    }
}
