<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VisitorSelectHouse extends Model
{
    protected $table='visitor_select_houses'; 
    protected $fillable = [
        'fullName',
        'phone',
        'type',
        'isRead',
    ];
    use HasFactory;
}
