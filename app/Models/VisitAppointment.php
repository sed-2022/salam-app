<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VisitAppointment extends Model
{
    protected $table='visit_appointments'; 
    protected $fillable = [
        'fullName',
        'phone',
        'team_no',
        'isRead',
    ];
    use HasFactory;
}
