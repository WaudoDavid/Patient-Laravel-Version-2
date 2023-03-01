<!DOCTYPE html>
<html>

<head>
    <title>Patient Record</title>
    <style>
    /* CSS to style the text field */
    .form-container {
        padding: 30px;
        border: 1px solid #000;
        font-size: 12px;
    }

    label {
        /*font-weight: bold;*/
        display: inline-block;
        width: auto;
        text-align: right;
        margin-right: 10px;
    }

    input[type="text"] {
        display: inline-block;
        padding: 5px;
        border: none;
        border-bottom: 1px solid #000;
        background-color: transparent;
    }

    .form-row input[type="text"] {
        width: auto;
        margin-right: 10px;
    }

    /* CSS to align gender, age, weight and mobile on the same line */
    .form-row {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
    }

    .form-row label {
        width: auto;
        margin-right: 5px;
    }


    .form-row input[type="text"] {
        width: auto;
        margin-right: 10px;
    }

    /* CSS for two columns */
    .form-for-two {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
    }

    .form-for-two label {
        width: auto;
        margin-right: auto;
    }

    /*make treatment label bold*/
    .form-bold label {
        font-weight: bold
    }


    .form-for-two input[type="text"] {
        width: 230px;
        margin-right: 30px;
    }


    .for-name input[type="text"] {
        length: 500px;
        width: 550px;
    }

    .for-mail input[type="text"] {
        length: 700px;
        width: 515px;
    }

    .for-mail-next input[type="text"] {
        length: 500px;
        width: 574px;
    }
    </style>

</head>


<body>

    @foreach ($data as $patient)
    <div class="form-container">

        <div class="for-name">
            <label for="name" class="form-label">Name:</label>
            <input type="text" id="name" value="{{ $patient->name }}" name="name">
        </div>

        <label for="patient_id" class="form-label">No:</label>
        <input type="text" id="patient_id" value="{{ $patient->patient_id }}" name="patient_id">

        <label for="date_registered" style="margin-left: 85" class="form-label">Date:</label>
        <input type="text" id="date_registered" value="{{ $patient->date_registered }}" name="date_registered">
        <div class="form-for-two">
            <label for="gender" class="form-label">Gender:</label>
            <input type="text" id="gender" value="{{ $patient->gender }}" name="gender">

            <label for="age" class="form-label">Age:</label>
            <input type="text" id="age" style="width: auto;" value="{{ $patient->age }}" name="age">
        </div>
        <div class="form-for-two">

            <label for="weight" class="form-label">Weight:</label>
            <input type="text" id="weight" value="{{ $patient->weight }}" name="weight">

            <label for="mobile" class="form-label">Mobile:</label>
            <input type="text" id="mobile" style="width: auto;" value="{{ $patient->phone }}" name="mobile">
        </div>

        <div class="for-mail">
            <label for="address" class="form-label">Address:</label>
            <input type="text" id="address" value="{{ $patient->email_address }}">
        </div>
        <div class="for-mail-next">
            <input type="text" id="address">
        </div>
        <div class="form-for-two">
            <label for="treatment-time" class="form-label">Treatment time:</label>
            <input type="text" id="treatment-time" style="width: 124;" value="{{ $patient->treatment_time }}"
                name="treatment-time">

            <label for="fees" class="form-label">Fees:</label>
            <input type="text" id="fees" style="width: auto;" value="{{ $patient->fees }}" name="fees">
        </div>
        <div class="form-for-two">
            <label for="days" class="form-label">Days:</label>
            <input type="text" id="days" value="{{ $patient->days }}" name="days">

            <label for="months" class="form-label">Months:</label>
            <input type="text" id="months" value="{{ $patient->months }}" name="months">
        </div>

        <div class="form-for-two">
            <label for="medical_report" class="form-label">Medical Report:</label>
            <input type="text" id="medical_report" style="width: 125;" value="{{ $patient->medical_report }}"
                name="medical_report">

            <label for="history" class="form-label">History:</label>
            <input type="text" id="history" style="width: auto;" value="{{ $patient->history }}" name="history">
        </div>




        <br>

        <div class="form-for-two">
            <label for="sleep" class="form-label">Sleep:</label>
            <input type="text" id="sleep" value="{{ $patient->sleep }}" name="sleep">

            <label for="stool" class="form-label">Stool:</label>
            <input type="text" id="stool" value="{{ $patient->stool }}" name="stool">
        </div>
        <div class="form-for-two">
            <label for="hunger" class="form-label">Hunger:</label>
            <input type="text" id="hunger" style="width: 160    ;" value="{{ $patient->hunger }}" name="hunger">

            <label for="menses" class="form-label">Menses:</label>
            <input type="text" id="menses" value="{{ $patient->menses }}" name="menses">
        </div>
        <div class="form-for-two">
            <label for="thirst" class="form-label">Thirst:</label>
            <input type="text" id="thirst" value="{{ $patient->thirst }}" name="thirst">

            <label for="touching" class="form-label">Touching:</label>
            <input type="text" id="touching" style="margin-right: auto;" value="{{ $patient->touching }}"
                name="touching">
        </div>
        <div class="form-for-two">
            <label for="urine" class="form-label">Urine:</label>
            <input type="text" id="urine" value="{{ $patient->urine }}" name="urine">

            <label for="seeing" class="form-label">Seeing:</label>
            <input type="text" id="seeing" value="{{ $patient->seeing }}" name="seeing">
        </div>
        <div class="form-for-two">
            <label for="sweat" class="form-label">Sweat:</label>
            <input type="text" id="sweat" value="{{ $patient->sweat }}" name="sweat">

            <label for="fees" class="form-label">Tongue:</label>
            <input type="text" id="fees" value="{{ $patient->fees }}" name="fees">
        </div>
        <div class="form-for-two">
            <label for="teeth" class="form-label">Teeth:</label>
            <input type="text" id="teeth" value="{{ $patient->teeth }}" name="teeth">
            <label for="time" class="form-label"></label>
            <input type="text" id="teeth" name="teeth">
        </div>
        <label for="time" class="form-label">Time:</label>
        <input type="text" id="time" value="{{ $patient->treatment_time }}" name="time">


        <div class="form-row">
            <div class="form-check">
                <label class="form-check-label">
                    <label for="exampleInputtest">Test:</label>

                    <input type="checkbox" name="test[]" class="form-check-input" value="SR"> SR
                    <i class="input-helper"></i></label>

                <label class="form-check-label">
                    <input type="checkbox" name="test[]" class="form-check-input" value="BTR">
                    BTR <i class="input-helper"></i></label>

                <label class="form-check-label">
                    <input type="checkbox" name="test[]" class="form-check-input" value="PN"> PN
                    <i class="input-helper"></i></label>

                <label class="form-check-label">
                    <input type="checkbox" name="test[]" class="form-check-input" value="SL"> SL
                    <i class="input-helper"></i></label>
                <input type="text" id="test" value="{{ $patient->test }}" name="test">
            </div>
        </div>


        <div class="form-row">

            <div class="form-check">
                <label class="form-check-label">
                    <label for="exampleInputEmotion">Emotion:</label>
                    <input type="checkbox" name="emotion[]" value="Anger"> Anger <i class="input-helper"></i></label>

                <label class="form-check-label">
                    <input type="checkbox" name="emotion[]" value="Joy"> Joy <i class="input-helper"></i></label>

                <label class="form-check-label">
                    <input type="checkbox" name="emotion[]" value="Happiness" class="form-check-input"> Happiness <i
                        class="input-helper"></i></label>

                <label class="form-check-label">
                    <input type="checkbox" name="emotion[]" value="Agony" class="form-check-input">
                    Agony <i class="input-helper"></i></label>

                <label class="form-check-label">
                    <input type="checkbox" name="emotion[]" value="Sadness" class="form-check-input"> Sadness <i
                        class="input-helper"></i></label>

                <label class="form-check-label">
                    <input type="checkbox" name="emotion[]" value="Fear" class="form-check-input">
                    Fear <i class="input-helper"></i></label>
                <input type="text" id="emotion" value="{{ $patient->emotion }}" name="emotion">
            </div>
        </div>


        <div class="form-row">
            <label for="right_finger" class="form-label">Right Finger:</label>

            <label for="Mf" class="form-label">Mf</label>
            <input type="text" id="Mf" value="{{ $patient->r_mf }}" name="Mf">

            <label for="lf" class="form-label">Lf:</label>
            <input type="text" id="lf" value="{{ $patient->r_lf }}" name="lf">

            <label for="weight" class="form-label">Rf:</label>
            <input type="text" id="weight" value="{{ $patient->r_rf }}" name="weight">

            <label for="mobile" class="form-label">Sf:</label>
            <input type="text" id="mobile" value="{{ $patient->r_sf }}" name="mobile">
        </div>
        <div class="form-row">
            <label for="left_finger" class="form-label">Left Finger:</label>

            <label for="Mf" class="form-label">Mf</label>
            <input type="text" id="Mf" value="{{ $patient->l_mf }}" name="Mf">

            <label for="lf" class="form-label">Lf:</label>
            <input type="text" id="lf" value="{{ $patient->l_lf }}" name="lf">

            <label for="weight" class="form-label">Rf:</label>
            <input type="text" id="weight" value="{{ $patient->l_rf }}" name="weight">

            <label for="mobile" class="form-label">Sf:</label>
            <input type="text" id="mobile" value="{{ $patient->l_sf }}" name="mobile">
        </div>



        <div style="text-align:center;">
            <h3>Natural Therapy Treatment</h3>
        </div>
        <div class="form-bold">
            <label for="steam" class="form-label">1. Steam Bath:</label>
            <input type="text" id="steam" value="{{ $patient->steam_bath }}" name="steam">
            <br>
            <label for="sek" class="form-label">2. Sek:</label>
            <input type="text" id="sek" value="{{ $patient->sek }}" name="sek">
            <br>

            <label for="anima" class="form-label">3. Anima:</label>
            <input type="text" id="anima" value="{{ $patient->anima }}" name="anima">
            <br>

            <label for="neti" class="form-label">4. Neti:</label>
            <input type="text" id="neti" value="{{ $patient->neti }}" name="neti">
            <br>

            <label for="lapet" class="form-label">5. Lapet:</label>
            <input type="text" id="lapet" value="{{ $patient->lapet }}" name="lapet">
            <br>

            <label for="malish" class="form-label">6. Malish:</label>
            <input type="text" id="malish" value="{{ $patient->malish }}" name="malish">
            <br>

            <label for="masaj" class="form-label">7. Me.Masaj:</label>
            <input type="text" id="masaj" value="{{ $patient->me_masaj }}" name="masaj">
            <br>

            <label for="other" class="form-label">8. Other:</label>
            <input type="text" id="other" value="{{ $patient->other }}" name="other">
        </div>
    </div>
    <!-- <div class="page-break"></div> -->







    @endforeach
</body>

</html>