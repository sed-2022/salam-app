<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HousesImageGallery extends Model
{
    protected $table = 'houses_image_galleries';
    protected $fillable = [
        'path',
    ];
    use HasFactory;
}
