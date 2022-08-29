<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FundingPageSettings extends Model
{
    protected $table='funding_page_settings'; 
    protected $fillable = [
        'logo',
    ];
    use HasFactory;
}
