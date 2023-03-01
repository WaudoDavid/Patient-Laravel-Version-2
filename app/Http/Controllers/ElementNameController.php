<?php

namespace App\Http\Controllers;

use App\Models\element_name;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;



class ElementNameController extends Controller
{


    public function add_element()
    {
        return view('add_element');
    }
    public function submitForm(Request $request)
    {
            $patientData = new element_name();                     
            $patientData->name=$request->name;
            //status
            $patientData->status=$request->status;
                
            $patientData->save();   
            Alert::success('','Element has been saved succesfully');

             return redirect()->back();
    }
        
       public function edit_element($id)
    {
        
        $elementdata = element_name::find($id);

        return view('edit_element', compact('elementdata'));
        
    }


public function update_element(Request $request ,$id)
    {
        $patientData = element_name::find($id);                     
        $patientData->name=$request->name;
        //status
        $patientData->status=$request->status;
            
        $patientData->save();   
        Alert::success('','Element has been updated');
        return redirect ('add_element');
    }

    
    public function delete_element($id)
    {
        $patient = element_name::find($id);
    
    
        if ($patient) {
            $patient->delete();
            Alert::success('', 'Element successfully deleted');
        } else {
            Alert::error('', 'Element not found');
        }
      
    
        return redirect()->back();
    }
    
    
    
        public function approve_element($id)
        {
            $patient = element_name::find($id);
            
            $patient->status='Approved';
            $patient -> save();
    
            Alert::success('','Element has been approved');
    
            return redirect()->back();
            
        }
    
        public function reject_element($id)
        {
            $patient = element_name::find($id);
            
            $patient->status='Rejected';
            $patient -> save();
    
            Alert::error('','Element has been rejected');
    
            return redirect()->back();
            
        }
    


   

    
}