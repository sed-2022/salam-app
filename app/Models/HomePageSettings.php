<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomePageSettings extends Model
{
    protected $table = 'home_page_settings';
    protected $fillable = [
        'pdf_file',
        'first_slider_photo',
        'second_slider_photo',
        'third_slider_photo',
        'about_sabya',
        'about_sabya_photo',
        'area_number',
        'units_number',
        'facilites_number',
        'about_developer_title',
        'about_developer_content',
        'about_developer_more',
        'about_developer_photo',
        'protoype_A_title',
        'protoype_A_photo',
        'A_rooms',
        'protoype_A_bulding_area',
        'protoype_A_price',
        'protoype_A_pdf',
        'protoype_B_title',
        'protoype_B_photo',
        'B_rooms',
        'protoype_B_bulding_area',
        'protoype_B_price',
        'protoype_B_pdf',
        'protoype_C_title',
        'protoype_C_photo',
        'C_rooms',
        'protoype_C_bulding_area',
        'protoype_C_price',
        'protoype_C_pdf',
        'promotional_section',
        
    ];
    use HasFactory;
}
