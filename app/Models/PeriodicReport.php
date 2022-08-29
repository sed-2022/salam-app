<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PeriodicReport extends Model
{
    protected $table='periodic_reports'; 
    protected $fillable = [
        'title',
        'brief',
        'link',
    ];
    use HasFactory;
}
