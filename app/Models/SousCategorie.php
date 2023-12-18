<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SousCategorie extends Model
{
    use HasFactory;
    protected $table = 'sous_categorie';
    protected $fillable = ['libelle', 'categorie_id'];

    public $timestamps = true;
    public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }
}
