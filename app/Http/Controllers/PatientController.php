<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Patient;
use App\Models\Element;

use RealRashid\SweetAlert\Facades\Alert;
use Dompdf\Dompdf;

class PatientController extends Controller
{
public function add_patient()
    {
        return view('add_patient');
    }

    public function submitForm(Request $request)

    {
        //column then name in the input type
        //section for patient records
        $patient = new patient;
        $patient->patient_id=$request->patient_id;
        $patient->name=$request->name;
        $patient->age=$request->age;
        $patient->email_address=$request->mail;
        $patient->phone=$request->phone;
        $patient->gender=$request->gender;
        $patient->date_registered=$request->date;
        $patient->weight=$request->weight;
        $patient->treatment_time=$request->treatment_time;
        $patient->fees=$request->fees;
        $patient->days=$request->days;
        $patient->months=$request->months;
        $patient->medical_report=$request->medical;
        $patient->history=$request->history;
        
        /*//Natural therapy treatment
        $patient->steam_bath=$request->steam;
        $patient->sek=$request->sek;
        $patient->anima=$request->anima;
        $patient->neti=$request->neti;
        $patient->lapet=$request->lapet;
        $patient->malish=$request->malish;
        $patient->me_masaj=$request->me_masaj;
        $patient->other=$request->other;   
        $patient->result=$request->result;    */
 
        //section for medical records
        $patient->sleep=$request->sleep;
        $patient->stool=$request->stool;
        $patient->hunger=$request->hunger;
        $patient->menses=$request->menses;
        $patient->thirst=$request->thirst;
        $patient->touching=$request->touching;
        $patient->urine=$request->urine;
        $patient->seeing=$request->seeing;
        $patient->sweat=$request->sweat;
        $patient->tongue=$request->tongue;
        $patient->teeth=$request->teeth;

        //status
        $patient->status=$request->status;
        
        $tests = json_encode($request->input('test'));
        $patient->test=$tests;


        $emotions = json_encode($request->input('emotion'));
        $patient->emotion=$emotions;

        //right finger
        $patient->r_mf=$request->r_mf;
        $patient->r_lf=$request->r_lf;
        $patient->r_rf=$request->r_rf;
        $patient->r_sf=$request->r_sf;

        //left finger
        $patient->l_mf=$request->l_mf;
        $patient->l_lf=$request->l_lf;
        $patient->l_rf=$request->l_rf;
        $patient->l_sf=$request->l_sf;


         // $right_finger = json_encode($request->input('rf'));
         //  $patient->right_finger=$right_finger;

        //$left_finger = json_encode($request->input('lf'));
        //$patient->left_finger=$left_finger;

        $patient->save();   

       /* foreach ($request->input('inputs') as $input) {
            if (isset($input['elements'])) {
                $element = $input['elements'];
            } else {
                // Handle the missing 'elements' key here, for example:
                $element = '';
            }
            
            $element_info = $input['elements_info'];*/

            $inputs = $request->inputs;
            dd($inputs);
            foreach ($inputs as $input) {
                $bodyPart = $input['elements'];
                
                $info = $input['elements_info'];
        

            $patientData = new element();
            $patientData->id = $patient->id;
            $patientData->patient_id = $patient->patient_id=$request->patient_id;
            $patientData->element = $bodyPart;
            $patientData->element_info = $info;
            /*$patientData->steam_bath=$request->steam;
            $patientData->sek=$request->sek;
            $patientData->anima=$request->anima;
            $patientData->neti=$request->neti;
            $patientData->lapet=$request->lapet;
            $patientData->malish=$request->malish;
            $patientData->me_masaj=$request->me_masaj;
            $patientData->other=$request->other;   
            $patientData->result=$request->result;    */
     
            $patientData->save();   





        }
        
       
        Alert::success('','Patient succesfully registered');

        return redirect()->back();

       
    }





    /*public function showpatientlist()
    {
        $patients = Patient::all();

        return view('home', compact('patients'));
        
      }*/

      public function showpatientlist()
    {
        $patients = Patient::with('element')->get();
        $elements = Element::with('patient')->get();

        return view('home', compact('patients','elements'));
        
      }

   
      

    public function search()
    {
        return view('search_patient');
    }
    


    public function search_patient(Request $request)
    {
        $search_text = $_GET['query'];
        $patients = Patient::where('patient_id', 'like', '%' . $search_text . '%')
            ->orWhere('name', 'like', '%' . $search_text . '%')
            ->orWhere('phone', 'like', '%' . $search_text . '%')->get();
            
        if ($patients->isEmpty()) {
            Alert::error('', 'Patient not found');
        }

        //For the treatments table 
        $elements = Element::where('patient_id', 'like', '%' . $search_text . '%')->get();
            
            
        if ($elements->isEmpty()) {
            Alert::error('', 'Patient not found');
        }
    
        return view('search_patient', compact('patients','elements'));
    }
    
        
    
  




    public function downloadPdf($patient_id)
    {
        
       
       $data = Patient::where('patient_id', $patient_id)->get();
     
         
        if ($data->count() > 0) {
            $patient = $data->first();
            // Use $patient object here
            $pdf = new Dompdf();     
           
            $pdf->loadHtml(view('patient_pdf', compact('data')));
            $pdf->setPaper('A4', 'portrait');
            $pdf->render();
            $pdf->stream('.pdf', array('Attachment' => false));
        } else {
            // Patient not found, show error message
            return redirect()->back()->with('error', 'Patient not found');
        }

        
    }
    
    
    
    public function edit_patient($patient_id)
    {
        $data = Patient::find($patient_id);
        $elementdata = Element::find($patient_id);

        return view('edit_patient', compact('data','elementdata'));
        
    }


public function update_patient(Request $request ,$patient_id)
    {
        //patient records update
        $patient = Patient::find($patient_id);
        $patient->patient_id=$request->patient_id;
        $patient->name=$request->name;
        $patient->age=$request->age;
        $patient->email_address=$request->mail;
        $patient->phone=$request->phone;
        $patient->gender=$request->gender;
        $patient->date_registered=$request->date;
        $patient->weight=$request->weight;
        $patient->treatment_time=$request->treatment_time;
        $patient->fees=$request->fees;
        $patient->days=$request->days;
        $patient->months=$request->months;
        $patient->medical_report=$request->medical;
        $patient->history=$request->history;
       
       /* //Natural therapy treatment
        $patient->steam_bath=$request->steam;
        $patient->sek=$request->sek;
        $patient->anima=$request->anima;
        $patient->neti=$request->neti;
        $patient->lapet=$request->lapet;
        $patient->malish=$request->malish;
        $patient->me_masaj=$request->me_masaj;
        $patient->other=$request->other;
        $patient->result=$request->result;    */

        
        //medical records update
        $patient->sleep=$request->sleep;
        $patient->stool=$request->stool;
        $patient->hunger=$request->hunger;
        $patient->menses=$request->menses;
        $patient->thirst=$request->thirst;
        $patient->touching=$request->touching;
        $patient->urine=$request->urine;
        $patient->seeing=$request->seeing;
        $patient->sweat=$request->sweat;
        $patient->tongue=$request->tongue;
        $patient->teeth=$request->teeth;

        //status
        $patient->status=$request->status;

        //test and emotion
        $tests = json_encode($request->input('test'));
        $patient->test=$tests;
        $emotions = json_encode($request->input('emotion'));
        $patient->emotion=$emotions;

        //right finger
        $patient->r_mf=$request->r_mf;
        $patient->r_lf=$request->r_lf;
        $patient->r_rf=$request->r_rf;
        $patient->r_sf=$request->r_sf;

        //left finger
        $patient->l_mf=$request->l_mf;
        $patient->l_lf=$request->l_lf;
        $patient->l_rf=$request->l_rf;
        $patient->l_sf=$request->l_sf;
        
       /* $right_finger = json_encode($request->input('rf'));
        $patient->right_finger=$right_finger;

        $left_finger = json_encode($request->input('lf'));
        $patient->left_finger=$left_finger;*/
    
        $patient->save();   

       foreach ($request->input('inputs') as $input) {
            if (isset($input['elements'])) {
                $element = $input['elements'];
            } else {
                // Handle the missing 'elements' key here, for example:
                $element = 'No element';
            }
            
            $element_info = $input['elements_info'];

            $patientData = element::find($patient_id);
            $patientData->id = $patient->id;
            $patientData->patient_id = $patient->patient_id=$request->patient_id;
            $patientData->element = $request->input('name');
            $patientData->element_info = $request->input('email');        
            $patientData->element = $element;
            $patientData->element_info = $element_info;
            $patientData->steam_bath=$request->steam;
            $patientData->sek=$request->sek;
            $patientData->anima=$request->anima;
            $patientData->neti=$request->neti;
            $patientData->lapet=$request->lapet;
            $patientData->malish=$request->malish;
            $patientData->me_masaj=$request->me_masaj;
            $patientData->other=$request->other;   
            $patientData->result=$request->result;    
     
            $patientData->save();   
        }
        Alert::success('','Patient succesfully updated');

        return redirect()->back();
        
    }

    public function delete_patient($patient_id)
{
    $patient = Patient::find($patient_id);
    $element = Element::find($patient_id);


    if ($patient) {
        $patient->delete();
        Alert::success('', 'Patient successfully deleted');
    } else {
        Alert::error('', 'Patient not found');
    }
    if ($element) {
        $element->delete();
        Alert::success('', 'Patient successfully deleted');
    } else {
        Alert::error('', 'Patient not found');
    }

    return redirect()->back();
}



    public function approve_patient($patient_id)
    {
        $patient = Patient::find($patient_id);
        
        $patient->status='Approved';
        $patient -> save();

        Alert::success('','Patient has been approved');

        return redirect()->back();
        
    }

    public function reject_patient($patient_id)
    {
        $patient = Patient::find($patient_id);
        
        $patient->status='Rejected';
        $patient -> save();

        Alert::error('','Patient has been rejected');

        return redirect()->back();
        
    }


}   