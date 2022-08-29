<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HouseReservation extends Model
{
    protected $table='house_reservations'; 
    protected $fillable = [
        'type',
        'subtype',
        'isAvailable',
    ];
    use HasFactory;
}
