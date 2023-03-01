<!DOCTYPE html>
<html lang="en">
  <head>
     <base href="/public">
      @include('css')
  </head>
  <body>
    <div class="container-scroller">
      
      <!-- partial:partials/_sidebar.html -->
      @include('sidebar')
      <!-- partial -->
        @include('navbar')      
        <div class="container-fluid page-body-wrapper">
                  @include('sweetalert::alert') 

  <div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Medical record</h4>
        <p class="card-description"> Enter medical records </p>
        <form class="forms-sample" action= "{{url('update_record, $data->patient_id')}}" method= "post">
                    @csrf     

         <div class="form-group">
            <label for="exampleInputpatientid">Patient ID</label>
            <input type="text" class="form-control" id="exampleInputpatientid" name ="patient_id" placeholder="Patient ID" style="color: white !important;" required>
           </div>

          <div class="form-group">
            <label for="exampleInputSleep">Sleep</label>
            <input type="text" class="form-control" id="exampleInputSleep" name ="sleep" placeholder="Sleep" style="color: white !important;">
           </div>
        <div class="form-group">
                    <label for="exampleInputStool">Stool</label>
                    <input type="text" class="form-control" id="exampleInputStool" name ="stool" placeholder="Stool" style="color: white !important;">
           </div>
        <div class="form-group">
                    <label for="exampleInputHunger">Hunger</label>
                    <input type="text" class="form-control" id="exampleInputHunger" name ="hunger" placeholder="Hunger" style="color: white !important;">
                  </div>
        <div class="form-group">
                    <label for="exampleInputMenses">Menses</label>
                    <input type="text" class="form-control" id="exampleInputMenses" name ="menses" placeholder="Menses" style="color: white !important;">
                  </div>
        <div class="form-group">
                    <label for="exampleInputThirst">Thirst</label>
                    <input type="text" class="form-control" id="exampleInputThirst" name ="thirst" placeholder="Thirst" style="color: white !important;">
                  </div>
        <div class="form-group">
                    <label for="exampleInputTouching">Touching</label>
                    <input type="text" class="form-control" id="exampleInputTouching" name ="touching" placeholder="Touching" style="color: white !important;">
                  </div>
        <div class="form-group">
                    <label for="exampleInputUrine">Urine</label>
                    <input type="text" class="form-control" id="exampleInputUrine" name ="urine" placeholder="Urine" style="color: white !important;">
                  </div>
        <div class="form-group">
                    <label for="exampleInputSeeing">Seeing</label>
                    <input type="text" class="form-control" id="exampleInputSeeing" name ="seeing" placeholder="Seeing" style="color: white !important;">
                  </div>
        <div class="form-group">
                    <label for="exampleInputSweat">Sweat</label>
                    <input type="text" class="form-control" id="exampleInputSweat" name ="sweat" placeholder="Sweat" style="color: white !important;">
                  </div>
        <div class="form-group">
                    <label for="exampleInputTongue">Tongue</label>
                    <input type="text" class="form-control" id="exampleInputTongue" name ="tongue" placeholder="Tongue" style="color: white !important;">
                  </div>
        <div class="form-group">
                    <label for="exampleInputTeeth">Teeth</label>
                    <input type="text" class="form-control" id="exampleInputTeeth" name ="teeth" placeholder="Teeth" style="color: white !important;">
                  </div>
                  
                  <div class="form-group">
            <label for="currentTime">Current Time:</label>
            <div id="currentTime">
              <script>
                var date = new Date();
                document.write(date.toLocaleTimeString());
              </script>
            </div>
          </div>  
                 


                    
                      <div class="row">
                     
                        <div class="col-md-6">
                        <label for="exampleInputTest">Test</label>    
                          <div class="form-group">
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" name ="test[]" class="form-check-input" value="SR"> SR <i class="input-helper"></i></label>
                            </div>
                            
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" name ="test[]" class="form-check-input" value="BTR"> BTR <i class="input-helper"></i></label>
                            </div>

                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" name ="test[]" class="form-check-input" value="PN"> PN <i class="input-helper"></i></label>
                            </div>

                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" name ="test[]" class="form-check-input" value="SL"> SL <i class="input-helper"></i></label>
                            </div>

                                                       
                          </div>
                        </div>
                        
                        <div class="col-md-6">
                        <label for="exampleInputEmotion">Emotion</label>      
                          <div class="form-group">
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" name="emotion[]" value="Anger"> Anger <i class="input-helper"></i></label>
                            </div>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" name="emotion[]" value="Joy"> Joy <i class="input-helper"></i></label>
                            </div>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox"name ="emotion[]" value="Happiness" class="form-check-input"> Happiness <i class="input-helper"></i></label>
                            </div>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" name ="emotion[]" value="Agony" class="form-check-input"> Agony <i class="input-helper"></i></label>
                            </div>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" name ="emotion[]" value="Sadness" class="form-check-input"> Sadness <i class="input-helper"></i></label>
                            </div>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" name ="emotion[]"  value="Fear" class="form-check-input"> Fear <i class="input-helper"></i></label>
                            </div>
                          </div>
                        </div>
                      </div>
                    


                    
               

                    <div class="row">
  <div class="col-md-6">
    <div class="form-group">
      <label for="exampleInputRightFinger">Right Finger</label>
      <div style="display: flex;">
        <input type="text" name ="rf[]" class="form-control" id="exampleInputMf" style="width: 50px; margin-right: 10px; color: white !important;" placeholder="Mf" maxlength="3">
        <input type="text"  name ="rf[]" class="form-control" id="exampleInputIf" style="width: 50px; margin-right: 10px; color: white !important;" placeholder="If" maxlength="3">
        <input type="text" name ="rf[]" class="form-control" id="exampleInputRf" style="width: 50px; margin-right: 10px; color: white !important;" placeholder="Rf" maxlength="3">
        <input type="text" name ="rf[]" class="form-control" id="exampleInputSf" style="width: 50px; margin-right: 10px; color: white !important;" placeholder="Sf" maxlength="3">
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group">
      <label for="exampleInputLeftFinger">Left Finger</label>
      <div style="display: flex;">
        <input type="text" name ="lf[]" class="form-control" id="exampleInputMf" style="width: 50px; margin-right: 10px; color: white !important;" placeholder="Mf" maxlength="3">
        <input type="text" name ="lf[]" class="form-control" id="exampleInputIf" style="width: 50px; margin-right: 10px; color: white !important;" placeholder="If" maxlength="3">
        <input type="text" name ="lf[]" class="form-control" id="exampleInputRf" style="width: 50px; margin-right: 10px; color: white !important;" placeholder="Rf" maxlength="3">
        <input type="text"  name ="lf[]" class="form-control" id="exampleInputSf" style="width: 50px; margin-right: 10px; color: white !important;" placeholder="Sf" maxlength="3">
      </div>
    </div>
  </div>
</div>
  
<div class="d-flex justify-content-center">
  <button type="submit" class="btn btn-primary">Submit</button>
</div>
          
                    </form>

                  </div>
                </div>
              </div>
        </div>
     
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('script')
    <!-- End custom js for this page -->
  </body>
</html>





















