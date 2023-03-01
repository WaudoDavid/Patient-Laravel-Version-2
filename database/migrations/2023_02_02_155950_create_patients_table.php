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
        Schema::create('patients', function (Blueprint $table) {
            //patient records
            $table->id();
            $table->string('patient_id')->nullable();
            //$table->string('patient_id')->nullable()->unique();
            $table->string('name')->nullable(); 
            $table->string('age')->nullable();
            $table->string('email_address')->nullable();
            $table->string('phone')->nullable();
            $table->string('gender')->nullable();
            $table->string('date_registered')->nullable();
            $table->string('weight')->nullable();
            $table->string('treatment_time')->nullable();
            $table->string('fees')->nullable();
            $table->string('days')->nullable();
            $table->string('months')->nullable();
            $table->string('medical_report')->nullable();
            $table->string('history')->nullable();
                
            //Natural therapy treatments
           /* $table->string('steam_bath')->nullable();
            $table->string('sek')->nullable();
            $table->string('anima')->nullable();
            $table->string('neti')->nullable();
            $table->string('lapet')->nullable();
            $table->string('malish')->nullable();
            $table->string('me_masaj')->nullable();
            $table->string('other')->nullable();
            $table->string('result')->nullable();*/
    
            //medical records  
            $table->string('sleep')->nullable();
            $table->string('stool')->nullable();
            $table->string('hunger')->nullable();
            $table->string('menses')->nullable();
            $table->string('thirst')->nullable();
            $table->string('touching')->nullable();
            $table->string('urine')->nullable();
            $table->string('seeing')->nullable();
            $table->string('sweat')->nullable();
            $table->string('tongue')->nullable();
            $table->string('teeth')->nullable();
            $table->string('test')->nullable();
            $table->string('emotion')->nullable();
            //right finger            
            $table->longText('r_mf')->nullable();
            $table->longText('r_lf')->nullable();
            $table->longText('r_rf')->nullable();
            $table->longText('r_sf')->nullable();

            //left finger         
            $table->longText('l_mf')->nullable();
            $table->longText('l_lf')->nullable();
            $table->longText('l_rf')->nullable();
            $table->longText('l_sf')->nullable();
    
            //status
            $table->string('status')->nullable();
    
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
        Schema::dropIfExists('patients');
    }
};