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
        
        


        Schema::create('elements', function (Blueprint $table) {
            $table->id();   
            $table->string('patient_id')->nullable();           
            $table->string('element')->nullable();
            $table->string('element_info')->nullable();     
            //natural treatements
            $table->string('steam_bath')->nullable();
            $table->string('sek')->nullable();
            $table->string('anima')->nullable();
            $table->string('neti')->nullable();
            $table->string('lapet')->nullable();
            $table->string('malish')->nullable();
            $table->string('me_masaj')->nullable();
            $table->string('other')->nullable();
            $table->string('result')->nullable();
            $table->timestamps(); 
        
        });
        /** 
         * //better off creating foreign key in phpmyadmin
        Schema::create('elements', function (Blueprint $table) {
            $table->id()->foreign('pid')->references('id')->on('patients')->onDelete('cascade');   
            $table->string('patient_id')->nullable()->foreign('patient_id')->references('patient_id')->on('patients');           
            $table->string('element')->nullable();
            $table->string('element_info')->nullable();     
            $table->timestamps();    
        });
        */
        
       
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('elements');
    }
};