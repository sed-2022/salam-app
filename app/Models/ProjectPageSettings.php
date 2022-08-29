<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectPageSettings extends Model
{
    protected $table='project_page_settings'; 
    protected $fillable = [
        'pdf_file',
        'scheme_img',
        'first_promotional_text',
        'second_promotional_text',
        'third_promotional_text',
    ];
    use HasFactory;
}
