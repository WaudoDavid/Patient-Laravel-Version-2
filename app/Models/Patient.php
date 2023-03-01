<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Element;

class Patient extends Model
{    
    protected $primaryKey = 'patient_id';
    public function element()
    {
        return $this->hasMany(Element::class, 'element','element_info');
    }
   
   
   
    /* public function patient()
    {
        return $this->hasMany(Element::class);
    }*/
    
}