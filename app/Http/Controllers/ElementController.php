<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Http\Request;

use App\Models\Patient;
use App\Models\Element;


class ElementController extends Controller
{
use HasFactory;
    protected $fillable = ['patient_id','element','element_info'];

    
}