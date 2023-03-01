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
        Schema::create('medicals', function (Blueprint $table) {
            $table->string('patient_no')->nullable();
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
            $table->longText('right_finger')->nullable();
            $table->longText('left_finger')->nullable();
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
        Schema::dropIfExists('medicals');
    }
};