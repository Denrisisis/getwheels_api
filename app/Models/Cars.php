<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cars extends Model
{
    use HasFactory;
    
    protected $table = 'cars';

    protected $fillable = [
        'make',
        'model',
        'year',
        'color',
        'mileage',
        'price_per_day',
        'availability'
    ];

}
