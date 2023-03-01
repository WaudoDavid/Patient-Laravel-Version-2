<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">

    @include('css')
    <style>
    .glow_button {
        padding: 0.6em 2em;
        border: none;
        outline: none;
        color: rgb(255, 255, 255);
        background: #111;
        cursor: pointer;
        position: relative;
        z-index: 0;
        border-radius: 10px;
        user-select: none;
        -webkit-user-select: none;
        touch-action: manipulation;
    }

    .glow_button:before {
        content: "";
        background: linear-gradient(45deg,
                #ff0000,
                #ff7300,
                #fffb00,
                #48ff00,
                #00ffd5,
                #002bff,
                #7a00ff,
                #ff00c8,
                #ff0000);
        position: absolute;
        top: -2px;
        left: -2px;
        background-size: 400%;
        z-index: -1;
        filter: blur(5px);
        -webkit-filter: blur(5px);
        width: calc(100% + 4px);
        height: calc(100% + 4px);
        animation: glowing-glow_button 20s linear infinite;
        transition: opacity 0.3s ease-in-out;
        border-radius: 10px;
    }

    @keyframes glowing-glow_button {
        0% {
            background-position: 0 0;
        }

        50% {
            background-position: 400% 0;
        }

        100% {
            background-position: 0 0;
        }
    }

    .glow_button:after {
        z-index: -1;
        content: "";
        position: absolute;
        width: 100%;
        height: 100%;
        background: #222;
        left: 0;
        top: 0;
        border-radius: 10px;
    }
    </style>

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

                                <h3 class="card-title">Elements</h4>
                                    <p3 class="card-description"> Add elements </p>
                            </div>
                            <div class="col-md-6">
                                <form class="forms-sample" action="{{url('update_element', $elementdata->id)}}"
                                    method="post">

                                    <div class="form-group">
                                        <label for="treatmentTime">Time</label>
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
                            <label for="exampleInputName1">Name</label>
                            <input type="text" class="form-control" value="{{$elementdata->Name}}"
                                id="exampleInputName1" placeholder="Name" name="name"
                                style="color: white !important; background-color: #2a3038 !important;">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputstatus">Status</label>
                            <input type="text" class="form-control" value="Unresolved" id="exampleInpustatus"
                                name="status" style="color: white !important;background-color: #2a3038 !important;"
                                readonly>
                        </div>




                        <div class="form-group">
                            <div class="d-flex justify-content-center">
                                <div class="col-md-1">
                                    <button class="glow_button" role="button">Submit</button>
                                </div>

                            </div>
                        </div>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>



    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('script')
    <!-- End custom js for this page -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>



</body>

</html>