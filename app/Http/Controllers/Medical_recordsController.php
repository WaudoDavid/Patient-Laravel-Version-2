<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medical;
use RealRashid\SweetAlert\Facades\Alert;



class Medical_recordsController extends Controller
{
    public function addview()
    {
        return view('medical_records_list');
    }

    
    public function show()
    {
        $medicals = Medical::all();
        return view('medical_records_list', compact('medicals'));
        
    }





public function edit_record($patient_no)
    {
        $data = Medical::find($patient_no);
        return view('edit_record', compact('data'));
        
    }


public function update_record(Request $request ,$patient_no)
    {
        $medical = Medical::find($patient_no);
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

        $tests = json_decode($medical->tests, true);
       
        $emotions = json_decode($medical->emotions, true);

        $right_finger = json_decode($medical->right_finger, true);

        $left_finger = json_decode($medical->left_finger, true);


        $medical->save();   

        Alert::success('','Medical record updated');

        return redirect()->back();

        
    }

    public function delete_patient($patient_no)
    {
        $medical= Medical::find($patient_no);
        

        $medical->delete();   

        Alert::success('','Medical record succesfully deleted');

        return redirect()->back();
        
    } 


}
