 <!-- partial -->
 <div class="main-panel">
          <div class="content-wrapper">
            @include('sweetalert::alert') 
            
            <div class="row ">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Medical List</h4>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>Patient number</th>
                            <th>Sleep</th>
                            <th>Stool</th>
                            <th>Menses</th>
                            <th>Thirst</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($medicals as $medical)
      <tr>
        <td>{{ $medical->patient_no }}</td>
        <td>{{ $medical->sleep }}</td>
        <td>{{ $medical->stool }}</td>
        <td>{{ $medical->menses }}</td>
        <td>{{ $medical->thirst }}</td>
        <td>
          <a href="{{url('edit_record', $medical->patient_no)}}"  class="btn btn-success btn-rounded btn-fw">View all/Update</a>
          <a href="{{url('delete_record', $medical->patient_no)}}"  onclick="return confirm ('Are you sure you want to delete this')" class="btn btn-danger btn-rounded btn-fw">Delete</a>
        </td>
       </tr>
    @endforeach
                        </tbody>
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