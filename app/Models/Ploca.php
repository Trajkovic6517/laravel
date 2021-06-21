<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ploca extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['naziv', 'slika', 'opis','cena','kategorija_id'];
}
