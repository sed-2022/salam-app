<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvolvedCompany extends Model
{
    
    protected $table='involved_companies'; 

    protected $fillable = [
        'logo',
        'title',   
    ];
    use HasFactory;
}
