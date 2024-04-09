<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RentalLocation extends Model
{
    use HasFactory;
    protected $table = 'rental_location';

    protected $fillable = [
        'name',
        'street',
        'city',
        'state',
        'zipcode'
    ];
}
