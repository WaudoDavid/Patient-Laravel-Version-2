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
                        <div class="row">
                            <div class="col-md-6">

                                <h4 class="card-title">Patient form</h4>
                                <p class="card-description"> Update patient details </p>
                            </div>
                            <div class="col-md-6">
                                <form class="forms-sample" action="{{url('update_patient', $data->patient_id)}}"
                                    method="post">

                                    <div class="form-group">
                                        <label for="treatmentTime">Current Time</label>
                                        <div id="treatmentTime">
                                            <script>
                                            var date = new Date();
                                            document.write(date.toLocaleTimeString());
                                            </script>
                                            <input type="hidden" name="treatment_time" value="{{ date('H:i:s') }}">
                                        </div>
                                    </div>

                            </div>
                        </div>

                        @csrf
                        <div class="form-group">
                            <label for="exampleInputPatientID">Patient ID</label>
                            <input type="text" class="form-control" id="exampleInputPatientID"
                                value="{{$data->patient_id}}" name="patient_id" placeholder="Patient ID" value="<?php
  $patient_id = rand(1,100000);
  while (DB::table('patients')->where('patient_id', $patient_id)->exists()) {
      $patient_id = rand(1,100000);
  }
  echo $patient_id;
  ?>" readonly style="color: white !important;background-color: #2a3038 !important;">
                        </div>


                        <div class="form-group">
                            <label for="exampleInputName1">Name</label>
                            <input type="text" class="form-control" id="exampleInputName1" placeholder="Name"
                                value="{{$data->name}}" name="name"
                                style="color: white !important; background-color: #2a3038 !important;">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputAge">Age</label>
                            <input type="number" class="form-control" id="exampleInputAge" placeholder="Age"
                                value="{{$data->age}}" name="age"
                                style="color: white !important; background-color: #2a3038 !important;" min="0"
                                max="150">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputName1">Email address</label>
                            <input type="text" class="form-control" id="exampleInputemail-address" placeholder="Em@il"
                                value="{{$data->email_address}} " name="mail"
                                style="color: white !important;background-color: #2a3038 !important;">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPhoneNumber">Phone Number</label>
                            <input type="number" ; class="form-control" id="exampleInputPhoneNumber"
                                placeholder="Number" value="{{$data->phone}}" name="phone" maxlength="10" min="0"
                                style="color: white !important;">
                        </div>

                        <div class="form-group">
                            <label for="exampleSelectGender">Gender</label>
                            <select class="form-control" id="exampleSelectGender" name="gender"
                                value="{{$data->gender}}" style="color: white !important;">
                                <option>Male</option>
                                <option>Female</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="todayDate">Today's Date</label>
                            <input type="text" class="form-control" id="todayDate" value="<?php echo date("Y-m-d");?>"
                                readonly name="date"
                                style="color: white !important; background-color: #2a3038 !important;">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputName1">Weight</label>
                            <input type="text" class="form-control" id="exampleInputWeight" placeholder="Weight"
                                value="{{$data->weight}}" name="weight" style="color: white !important;">
                        </div>


                        <div class="form-group">
                            <label for="exampleInputFees">Fees</label>
                            <input type="text" class="form-control" id="exampleInputFees" placeholder="Fees"
                                value="{{$data->fees}}" name="fees" style="color: white !important;">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputDays">Days</label>
                            <input type="text" class="form-control" id="exampleInputDays" placeholder="Days"
                                value="{{$data->days}}" name="days" style="color: white !important;">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputMonths">Months</label>
                            <input type="text" class="form-control" id="exampleInputMonths" placeholder="Months"
                                name="months" value="{{$data->months}}" style="color: white !important;">
                        </div>


                        <div class="form-group">
                            <label for="exampleTextmedical">Medical Report</label>
                            <textarea class="form-control" id="exampleTextmedical" rows="10" name="medical"
                                placeholder="Medical Report"
                                style="color: white !important; resize: both;">{{$data->medical_report}}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="exampleTexthistory">History</label>
                            <textarea class="form-control" id="exampleTexthistory" rows="4" name="history"
                                placeholder="History"
                                style="color: white !important; resize: both;">{{$data->history}}</textarea>
                        </div>



                        <div class="form-group">
                            <table class="table table-bordered" id="table">
                                <tr>
                                    <th>Element</th>
                                    <th>Element Info</th>
                                    <th>Action</th>
                                </tr>

                                <tr>

                                    <td>
                                        <select class="form-control" name="inputs[0][elements]"
                                            style="color: white !important;">
                                            <option selected disabled hidden>Select a body part:</option>
                                            <option value="nose">Nose</option>
                                            <option value="head">Head</option>
                                            <option value="thighs">Thighs</option>
                                            <option value="arms">Arms</option>
                                            <option value="legs">Legs</option>
                                            <option value="feet">Feet</option>
                                        </select>
                                    </td>

                                    <td>
                                        <textarea class="form-control" rows="4" name="inputs[0][elements_info]"
                                            placeholder="Add more information here"
                                            style="color: white !important;"></textarea>
                                    </td>

                                    <td><button type="button" id="add" name="add" class="btn btn-success">+ Add
                                            Row</button>
                                    </td>

                                </tr>

                            </table>
                        </div>





                        <h4 class="card-title">Medical record</h4>
                        <p class="card-description"> Update medical record </p>
                        <form class="forms-sample" action="{{url('update_record, $data->patient_id')}}" method="post">
                            @csrf



                            <div class="form-group">
                                <label for="exampleInputSleep">Sleep</label>
                                <input type="text" class="form-control" id="exampleInputSleep" name="sleep"
                                    value="{{$data->sleep}}" placeholder="Sleep" style="color: white !important;">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputStool">Stool</label>
                                <input type="text" class="form-control" id="exampleInputStool" name="stool"
                                    value="{{$data->stool}}" placeholder="Stool" style="color: white !important;">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputHunger">Hunger</label>
                                <input type="text" class="form-control" id="exampleInputHunger" name="hunger"
                                    value="{{$data->hunger}}" placeholder="Hunger" style="color: white !important;">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputMenses">Menses</label>
                                <input type="text" class="form-control" id="exampleInputMenses" name="menses"
                                    value="{{$data->menses}}" placeholder="Menses" style="color: white !important;">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputThirst">Thirst</label>
                                <input type="text" class="form-control" id="exampleInputThirst" name="thirst"
                                    value="{{$data->thirst}}" placeholder="Thirst" style="color: white !important;">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputTouching">Touching</label>
                                <input type="text" class="form-control" id="exampleInputTouching" name="touching"
                                    value="{{$data->touching}}" placeholder="Touching" style="color: white !important;">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUrine">Urine</label>
                                <input type="text" class="form-control" id="exampleInputUrine" name="urine"
                                    value="{{$data->urine}}" placeholder="Urine" style="color: white !important;">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputSeeing">Seeing</label>
                                <input type="text" class="form-control" id="exampleInputSeeing" name="seeing"
                                    placeholder="Seeing" value="{{$data->seeing}}" style="color: white !important;">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputSweat">Sweat</label>
                                <input type="text" class="form-control" id="exampleInputSweat" name="sweat"
                                    placeholder="Sweat" value="{{$data->sweat}}" style="color: white !important;">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputTongue">Tongue</label>
                                <input type="text" class="form-control" id="exampleInputTongue" name="tongue"
                                    placeholder="Tongue" value="{{$data->tongue}}" style="color: white !important;">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputTeeth">Teeth</label>
                                <input type="text" class="form-control" id="exampleInputTeeth" name="teeth"
                                    placeholder="Teeth" value="{{$data->teeth}}" style="color: white !important;">
                            </div>

                            <!-- Natural therapy treatment-->
                            <div class="form-group">
                                <h3 class="card-title">Natural therapy treatment</h4>
                                    <div class="form-group">
                                        <label for="exampleInputsteambath">Steam Bath</label>
                                        <input type="text" class="form-control" id="exampleInputsteambath" name="steam"
                                            placeholder="Add information here" value="{{$elementdata->steam_bath}}"
                                            style="color: white !important;">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputsek">Sek</label>
                                        <input type="text" class="form-control" id="exampleInputsek" name="sek"
                                            placeholder="Add information here" value="{{$elementdata->sek}}"
                                            style="color: white !important;">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputanima">Anima</label>
                                        <input type="text" class="form-control" id="exampleInputanima" name="anima"
                                            placeholder="Add information here" value="{{$elementdata->anima}}"
                                            style="color: white !important;">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputneti">Neti</label>
                                        <input type="text" class="form-control" id="exampleInputneti" name="neti"
                                            placeholder="Add information here" value="{{$elementdata->neti}}"
                                            style="color: white !important;">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputlapet">Lapet</label>
                                        <input type="text" class="form-control" id="exampleInputlapet" name="lapet"
                                            placeholder="Add information here" value="{{$elementdata->lapet}}"
                                            style="color: white !important;">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputmalish">Malish</label>
                                        <input type="text" class="form-control" id="exampleInputmalish" name="malish"
                                            placeholder="Add information here" value="{{$elementdata->malish}}"
                                            style="color: white !important;">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputmemasaj">Me.Masaj</label>
                                        <input type="text" class="form-control" id="exampleInputmemasaj" name="me_masaj"
                                            placeholder="Add information here" value="{{$elementdata->me_masaj}}"
                                            style="color: white !important;">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputother">Other</label>
                                        <input type="text" class="form-control" id="exampleInputother" name="other"
                                            placeholder="Add information here" value="{{$elementdata->other}}"
                                            style="color: white !important;">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputresult">Result</label>
                                        <input type="text" class="form-control" id="exampleInputresult" name="result"
                                            placeholder="Add information here" value="{{$elementdata->result}}"
                                            style="color: white !important;">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputstatus">Status</label>
                                        <input type="text" class="form-control" value="Unresolved"
                                            id="exampleInpustatus" name="status"
                                            style="color: white !important;background-color: #2a3038 !important;"
                                            readonly>
                                    </div>
                            </div>

                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="exampleTexttest">Test history</label>
                                        <input type="text" class="form-control" id="exampleTexttest"
                                            placeholder="Previous element" value="{{$data->test}}"
                                            style="color: white !important; background-color: #2a3038 !important;"
                                            readonly>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <label for="exampleInputTest">Test</label>
                                    <div class="form-group">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" name="test[]" class="form-check-input"
                                                    value="SR"> SR <i class="input-helper"></i></label>
                                        </div>

                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" name="test[]" class="form-check-input"
                                                    value="BTR"> BTR <i class="input-helper"></i></label>
                                        </div>

                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" name="test[]" class="form-check-input"
                                                    value="PN"> PN <i class="input-helper"></i></label>
                                        </div>

                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" name="test[]" class="form-check-input"
                                                    value="SL"> SL <i class="input-helper"></i></label>
                                        </div>


                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="exampleTexthistory">Emotion history</label>
                                        <input type="text" class="form-control" id="exampleTexthistory"
                                            placeholder="Previous element" value="{{$data->emotion}}"
                                            style="color: white !important; background-color: #2a3038 !important;"
                                            readonly>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <label for="exampleInputEmotion">Emotion</label>
                                    <div class="form-group">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" name="emotion[]" value="Anger"> Anger <i
                                                    class="input-helper"></i></label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" name="emotion[]" value="Joy"> Joy <i
                                                    class="input-helper"></i></label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" name="emotion[]" value="Happiness"
                                                    class="form-check-input"> Happiness <i
                                                    class="input-helper"></i></label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" name="emotion[]" value="Agony"
                                                    class="form-check-input"> Agony <i class="input-helper"></i></label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" name="emotion[]" value="Sadness"
                                                    class="form-check-input"> Sadness <i
                                                    class="input-helper"></i></label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" name="emotion[]" value="Fear"
                                                    class="form-check-input"> Fear <i class="input-helper"></i></label>
                                        </div>
                                    </div>
                                </div>
                            </div>






                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="exampleInputRightFinger">Right finger history</label>
                                        <input type="text" class="form-control" id="exampleInputRightFinger"
                                            placeholder="Previous element"
                                            value="{{$data->r_mf}},{{$data->r_lf}},{{$data->r_rf}},{{$data->r_sf}}"
                                            style="color: white !important; background-color: #2a3038 !important;"
                                            readonly>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="exampleInputRightFinger">Right Finger</label>
                                        <div style="display: flex;">
                                            <input type="text" value="{{$data->r_mf}}" name="r_mf" class="form-control"
                                                id="exampleInputMf"
                                                style="width: 50px; margin-right: 10px; color: white !important;"
                                                placeholder="Mf" maxlength="3">
                                            <input type="text" name="r_lf" value="{{$data->r_lf}}" class="form-control"
                                                id="exampleInputIf"
                                                style="width: 50px; margin-right: 10px; color: white !important;"
                                                placeholder="If" maxlength="3">
                                            <input type="text" name="r_rf" value="{{$data->r_rf}}" class="form-control"
                                                id="exampleInputRf"
                                                style="width: 50px; margin-right: 10px; color: white !important;"
                                                placeholder="Rf" maxlength="3">
                                            <input type="text" name="r_sf" value="{{$data->r_sf}}" class="form-control"
                                                id="exampleInputSf"
                                                style="width: 50px; margin-right: 10px; color: white !important;"
                                                placeholder="Sf" maxlength="3">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="exampleInputLeftFinger">Left finger history</label>
                                        <input type="text" class="form-control" id="exampleInputLeftFinger"
                                            placeholder="Previous element"
                                            value="{{$data->l_mf}},{{$data->l_lf}},{{$data->l_rf}},{{$data->l_sf}}"
                                            style="color: white !important; background-color: #2a3038 !important;"
                                            readonly>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="exampleInputLeftFinger">Left Finger</label>
                                        <div style="display: flex;">
                                            <input type="text" name="l_mf" value="{{$data->l_mf}}" class="form-control"
                                                id="exampleInputMf"
                                                style="width: 50px; margin-right: 10px; color: white !important;"
                                                placeholder="Mf" maxlength="3">
                                            <input type="text" name="l_lf" value="{{$data->l_lf}}" class="form-control"
                                                id="exampleInputIf"
                                                style="width: 50px; margin-right: 10px; color: white !important;"
                                                placeholder="If" maxlength="3">
                                            <input type="text" name="l_rf" value="{{$data->l_rf}}" class="form-control"
                                                id="exampleInputRf"
                                                style="width: 50px; margin-right: 10px; color: white !important;"
                                                placeholder="Rf" maxlength="3">
                                            <input type="text" name="l_sf" value="{{$data->l_sf}}" class="form-control"
                                                id="exampleInputSf"
                                                style="width: 50px; margin-right: 10px; color: white !important;"
                                                placeholder="Sf" maxlength="3">
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="d-flex justify-content-center">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>

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
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
        var i = 0;
        $('#add').click(function() {
            ++i;
            $('#table').append(
                `<tr>
                <td>
                <select class="form-control" name="inputs[` + i + `][elements]"
                                        style="color: white !important;">
                                        <option selected disabled hidden>Select a body part:</option>
                                        <option value="nose">Nose</option>
                                        <option value="head">Head</option>
                                        <option value="thighs">Thighs</option>
                                        <option value="arms">Arms</option>
                                        <option value="legs">Legs</option>
                                        <option value="feet">Feet</option></select>
                </td>
                <td>
                    <textarea class="form-control" rows="4"
                              name="inputs[` + i + `][elements_info]" placeholder="Add more information here"
                              style="color: white !important;"></textarea>
                </td>
                <td>
                    <button type="button" class="btn btn-danger btn-icon-text remove-table-row">
                        Remove row
                    </button>
                </td>
                </tr>`);
        });

        $(document).on('click', '.remove-table-row', function() {
            $(this).parents('tr').remove();
        });
        </script>

</body>

</html>