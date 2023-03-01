<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PatientController;

use App\Http\Controllers\MedicalController;

use App\Http\Controllers\Medical_recordsController;
use App\Http\Controllers\ElementNameController;


use App\Http\Controllers\ShowPatientListController;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Sidebar add patient route
Route::get('/add_patient', [PatientController::class, 'add_patient']);
//Submit patient record
Route::post('/upload_patient', [PatientController::class, 'submitForm']);

//Show patient list and treatments
Route::get('/adminpage', [PatientController::class, 'showpatientlist']);


//Edit and update elementname
Route::get('/edit_element/{id}', [ElementNameController::class, 'edit_element']);
Route::post('/update_element/{id}', [ElementNameController::class, 'update_element']);





//Search patient page view
Route::get('/search_page', [PatientController::class, 'search']);

//Search patient record
Route::get('/search_patient', [PatientController::class, 'search_patient']);


//Edit and update patient record
Route::get('/edit_patient/{patient_id}', [PatientController::class, 'edit_patient']);
Route::post('/update_patient/{patient_id}', [PatientController::class, 'update_patient']);
//Download patient form
Route::get('/patient/{patient_id}', [PatientController::class, 'downloadPdf'])->name('patient.downloadPdf');
//Delete patient
Route::get('/delete_patient/{patient_id}', [PatientController::class, 'delete_patient']);
//Approve or reject patient
Route::get('/approve_patient/{patient_id}', [PatientController::class, 'approve_patient']);
Route::get('/reject_patient/{patient_id}', [PatientController::class, 'reject_patient']);



//sidebar add element route
Route::get('/add_element', [ElementNameController::class, 'add_element']);
//Submit element record
Route::post('/upload_element', [ElementNameController::class, 'submitForm']);
//Delete elementname
Route::get('/delete_element/{id}', [ElementNameController::class, 'delete_element']);
//Approve or reject element
Route::get('/approve_element/{id}', [ElementNameController::class, 'approve_element']);
Route::get('/reject_element/{id}', [ElementNameController::class, 'reject_element']);





//Edit and update medical record(Not useful for now)
Route::get('/edit_record/{patient_id}', [Medical_recordsController::class, 'edit_record']);
Route::post('/update_record/{patient_id}', [Medical_recordsController::class, 'update_record']);

//Sidebar add medical route(Not useful for now)
Route::get('/medical_record', [MedicalController::class, 'addview']);

//Sidebar add medical records view and show route(Not useful for now)
Route::get('/medical_records_list', [Medical_recordsController::class, 'addview']);
Route::get('/medical_records_list', [Medical_recordsController::class, 'show']);