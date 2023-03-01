 <!-- partial -->
 <div class="main-panel">
     <div class="content-wrapper">
         @include('sweetalert::alert')

         <body>
             <h1>Search Results</h1>

             @if (count($patients) > 0)
             <ul>
                 @foreach ($patients as $patient)
                 <li>
                     <p>Patient ID: {{ $patient->patient_id }}</p>
                     <p>Patient Name: {{ $patient->name }}</p>
                     <p>Age: {{ $patient->age }}</p>
                 </li>
                 @endforeach
             </ul>
             @else
             <p>No patient found with that ID.</p>
             @endif
         </body>
         <!-- main-panel ends -->
     </div>
     <!-- page-body-wrapper ends -->
 </div>