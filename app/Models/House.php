<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class House extends Model
{

    use HasFactory;

    protected $fillable = [
        'name',
        'bedrooms',
        'bathrooms',
        'area',
        'car_park',
        'location',
        'type',
        'floors',
        'year_built',
        'nearby_places',
        'image',
    ];

}