<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stavkanarudzbine extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['ploca_id', 'narudzbina_id'];
}
