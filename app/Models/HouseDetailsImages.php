<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HouseDetailsImages extends Model
{
    protected $table = 'house_details_images';
    protected $fillable = [
        'type',
        'section',
        'path',
    ];

    use HasFactory;
}
