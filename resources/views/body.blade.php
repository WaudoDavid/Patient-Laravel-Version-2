 <!-- partial -->

 <div class="main-panel">
     <div class="content-wrapper">
         @include('sweetalert::alert')

         <div class="row ">


             <div class="col-12 grid-margin">
                 <div class="card">
                     <div class="card-body">

                         <h4 class="card-title">Patient List</h4>
                         <div class="table-responsive">

                             <table class="table">
                                 <thead>
                                     <tr>
                                         <td>Number</td>
                                         <th> Patient number </th>
                                         <th> Patient Name </th>
                                         <th> Mobile Phone</th>
                                         <th> Status </th>
                                         <th> Registered date </th>
                                         <th> Action </th>
                                     </tr>
                                 </thead>
                                 <tbody>
                                     @foreach ($patients as $patient)
                                     <tr>
                                         <td>{{ $loop->iteration}}</td>
                                         <td>{{ $patient->patient_id }}</td>
                                         <td>{{ $patient->name }}</td>
                                         <td>{{ $patient->phone }}</td>
                                         <td>{{ $patient->status }}</td>
                                         <td>{{ $patient->date_registered }}</td>
                                         <td>
                                             <a href="{{url('edit_patient', $patient->patient_id)}}"
                                                 class="btn btn-outline-success"><i
                                                     class="mdi mdi-tooltip-edit btn-icon-prepend"></i>Edit</a>
                                             <a href="{{url('delete_patient', $patient->patient_id)}}"
                                                 onclick="return confirm ('Are you sure you want to delete this')"
                                                 class="btn btn-outline-danger btn-icon-text"><i
                                                     class="mdi mdi-delete-forever btn-icon-prepend"></i>Delete</a>
                                             <a href="{{ route('patient.downloadPdf', ['patient_id' => $patient->patient_id]) }}"
                                                 class="btn btn-outline-success btn-icon-text "><i
                                                     class="mdi mdi-download btn-icon-prepend"></i> Download</a>
                                             <br><br>

                                             <a href="{{url('approve_patient', $patient->patient_id)}}"
                                                 class="btn btn-outline-success btn-icon-text "><i
                                                     class="mdi mdi-table-edit btn-icon-prepend"></i> Approve
                                             </a>

                                             <a href="{{url('reject_patient', $patient->patient_id)}}"
                                                 class="btn btn-outline-danger btn-icon-text "><i
                                                     class="mdi mdi-table-edit btn-icon-prepend"></i>Reject
                                             </a>

                                             <a href="" class="btn btn-outline-success btn-icon-text "><i
                                                     class="mdi mdi-treatment btn-icon-prepend"></i>Treatment
                                             </a>
                                         </td>
                                     </tr>

                                     @endforeach
                                 </tbody>
                             </table>

                         </div>
                     </div>
                 </div>
             </div>
             <div class="col-12 grid-margin">
                 <div class="card">
                     <div class="card-body">
                         <h4 class="card-title">Treatments</h4>
                         <div class="table-responsive">
                             <table class="table">
                                 <thead>
                                     <tr>
                                         <th> Number </th>
                                         <th> Patient number </th>
                                         <th> Elements</th>
                                         <th> Treatments </th>
                                         <th> Result</th>
                                         <th> Date </th>

                                     </tr>
                                 </thead>
                                 <tbody>
                                     <tr>
                                         @foreach ($elements as $element)
                                         <td>{{ $loop->iteration}}</td>

                                         <td>{{ $element->patient_id }}</td>
                                         <td>
                                             <ol>
                                                 {{ $element->element }} +{{ $element->element_info }}

                                             </ol>


                                         </td>
                                         <td>1.) {{ $element->steam_bath }}<br><br>
                                             2.) {{ $element->sek }}<br><br>
                                             3.) {{ $element->anima }}<br><br>
                                             4.) {{ $element->neti }}<br><br>
                                             5.) {{ $element->lapet }}<br><br>
                                             6.) {{ $element->malish }}<br><br>
                                             7.) {{ $element->me_masaj }}<br><br>
                                             8.) {{ $element->other }}<br><br>
                                         </td>

                                         <td>{{ $element->result }}</td>
                                         <td>{{ $element->created_at }}</td>

                                     </tr>

                                 </tbody>

                                 @endforeach



                             </table>

                         </div>
                     </div>
                 </div>
             </div>
         </div>

         <!-- content-wrapper ends -->
         <!-- partial:partials/_footer.html -->
         <footer class="footer">
             <div class="d-sm-flex justify-content-center justify-content-sm-between">


             </div>
         </footer>
         <!-- partial -->
     </div>

     <!-- main-panel ends -->
 </div>
 <!-- page-body-wrapper ends -->
 </div>