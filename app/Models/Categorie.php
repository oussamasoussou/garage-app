<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;
    protected $table = 'categorie';
    protected $fillable = ['libelle'];

    public $timestamps = true;
    public function sousCategorie()
    {
        return $this->hasMany(SousCategorie::class);
    }
}
