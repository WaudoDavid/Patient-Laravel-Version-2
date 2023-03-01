<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Medical;



class MedicalController extends Controller
{
   
    public function addview()
    {
        return view('medical_record');
    }


     public function upload(Request $request)

    {
    	//column then name in the input type


        $medical = new medical;
        $medical->patient_no=$request->patient_no;
        $medical->sleep=$request->sleep;
        $medical->stool=$request->stool;
        $medical->hunger=$request->hunger;
        $medical->menses=$request->menses;
        $medical->thirst=$request->thirst;
        $medical->touching=$request->touching;
        $medical->urine=$request->urine;
        $medical->seeing=$request->seeing;
        $medical->sweat=$request->sweat;
        $medical->tongue=$request->tongue;
        $medical->teeth=$request->teeth;

        $tests = json_encode($request->input('test'));
        $medical->test=$tests;


        $emotions = json_encode($request->input('emotion'));
        $medical->emotion=$emotions;

        $right_finger = json_encode($request->input('rf'));
        $medical->right_finger=$right_finger;

        $left_finger = json_encode($request->input('lf'));
        $medical->left_finger=$left_finger;


        $medical->save();   

        Alert::success('','Medical records succesfully added');

        return redirect()->back();

       
    }


}



