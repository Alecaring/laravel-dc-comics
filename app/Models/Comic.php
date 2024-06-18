<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'descrizione',
        'image',
        'price',
        'address',
        'bedrooms',
        'bathrooms',
        'square_meters',
        'property_type',
        'status',
        'built_year'
    ];
}
