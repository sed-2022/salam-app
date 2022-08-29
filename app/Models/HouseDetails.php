<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HouseDetails extends Model
{

    protected $table='house_details'; 
    protected $fillable = [
        'type',
        'section',
        'title',
        'length',
        'width',

    ];
    use HasFactory;
}
