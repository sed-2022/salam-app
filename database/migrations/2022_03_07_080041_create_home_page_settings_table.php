<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_page_settings', function (Blueprint $table) {
            $table->id();
            $table->string('pdf_file')->nullable();
            $table->string('first_slider_photo');
            $table->string('second_slider_photo');
            $table->string('third_slider_photo');
            $table->longText('about_salam');
            $table->longText('about_salam_photo')->nullable();
            $table->string('area_number');
            $table->string('units_number');
            $table->string('facilites_number');
            $table->string('about_developer_title');
            $table->longText('about_developer_content');
            $table->string('about_developer_more');
            $table->string('another_about_developer_more');
            $table->string('about_developer_photo')->nullable();
            $table->string('protoype_A_title');
            $table->string('protoype_A_photo')->nullable();
            $table->string('A_rooms');
            $table->string('protoype_A_bulding_area');
            $table->string('protoype_A_price');
            $table->string('protoype_A_pdf')->nullable();

            $table->string('protoype_B_title');
            $table->string('protoype_B_photo')->nullable();
            $table->string('B_rooms');
            $table->string('protoype_B_bulding_area');
            $table->string('protoype_B_price');
            $table->string('protoype_B_pdf')->nullable();

            $table->string('protoype_C_title');
            $table->string('protoype_C_photo')->nullable();
            $table->string('C_rooms');
            $table->string('protoype_C_bulding_area');
            $table->string('protoype_C_price');
            $table->string('protoype_C_pdf')->nullable();

            
            $table->string('promotional_section')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('home_page_settings');
    }
};
