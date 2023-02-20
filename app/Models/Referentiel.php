<?php

namespace App\Models;
use App\Models\Formation;
use App\Models\Type;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Referentiel extends Model
{
    protected $table = 'referentiel';
    protected $primaryKey = 'id';
    protected $fillable = ['libelle', 'valider', 'horaire','type_id'];

    public function formation()
    {
        return $this->hasMany(Formation::class);
    }

    public function type()
    {
        return $this->belongsTo(Type::class);
    }
   
}
