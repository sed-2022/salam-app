<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SucessPartners extends Model
{

    protected $table='sucess_partners'; 

    protected $fillable = [
        'logo',
    ];
    use HasFactory;
}
