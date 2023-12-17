<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mecanicien extends Model
{
    use HasFactory;
    protected $table = 'mecanicien';
    protected $fillable = ['nom', 'prenom', 'identite', 'telephone', 'image'];

    public $timestamps = true;
}
