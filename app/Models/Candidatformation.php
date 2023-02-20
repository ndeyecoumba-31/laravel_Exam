<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidatformation extends Model
{
    protected $table = 'candidat_formation';
    protected $primaryKey = 'id';
    protected $fillable = ['formation_id', 'candidat_id'];
}
