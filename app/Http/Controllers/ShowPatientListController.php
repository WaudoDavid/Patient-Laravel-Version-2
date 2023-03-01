<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;

class ShowPatientListController extends Controller
{
    public function show()
    {
        $patients = Patient::all();

        return view('home', compact('patients'));
        
    }
}
