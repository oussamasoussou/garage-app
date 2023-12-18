<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;
    protected $table = 'produit';
    protected $fillable = ['libelle', 'reference', 'quantite_stock', 'quantite_alert', 'categorie_id'];

    public $timestamps = true;
    public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }
}
