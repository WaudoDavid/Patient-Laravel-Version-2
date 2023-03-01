<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Patient;
class Element extends Model
{
    protected $primaryKey = 'patient_id';

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
}