<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kontakt extends Model
{
    use HasFactory;
    public $fillable = [
        'ime_prezime',
        'email',
        'telefon',
        'naslov',
        'poruka'
    ];
}
