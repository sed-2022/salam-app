<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectImageGallery extends Model
{
    protected $table = 'project_image_galleries';
    protected $fillable = [
        'path',
    ];
    use HasFactory;
}
