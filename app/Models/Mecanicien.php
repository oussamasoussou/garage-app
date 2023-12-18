<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Mecanicien extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'mecanicien';
    protected $fillable = ['nom', 'prenom', 'identite', 'telephone', 'image'];

    public $timestamps = true;
}
