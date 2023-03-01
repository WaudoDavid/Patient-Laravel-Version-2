<!DOCTYPE html>
<html lang="en">

<head>
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
                                <form class="forms-sample" action="{{url('upload_element')}}" method="post">

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
                            <input type="text" class="form-control" id="exampleInputName1" placeholder="Name"
                                name="name" style="color: white !important; background-color: #2a3038 !important;">
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

                        <table class="table">
                            <thead>
                                <tr>
                                    <td>No.</td>
                                    <th>id</th>
                                    <th>Element Name</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $elementname = App\Models\element_name::all();
                                @endphp

                                @foreach ($elementname as $element)
                                <tr>
                                    <td>{{ $loop->iteration}}</td>
                                    <td>{{ $element->id}}</td>
                                    <td>{{ $element->Name }}</td>
                                    <td>{{ $element->Status }}</td>
                                    <td>{{ $element->created_at}}</td>



                                    <td>
                                        <a href="{{url('edit_element', $element->id)}}"
                                            class="btn btn-outline-success"><i
                                                class="mdi mdi-tooltip-edit btn-icon-prepend"></i>Edit</a>
                                        <a href="{{url('delete_element', $element->id)}}"
                                            onclick="return confirm ('Are you sure you want to delete this')"
                                            class="btn btn-outline-danger btn-icon-text"><i
                                                class="mdi mdi-delete-forever btn-icon-prepend"></i>Delete</a>

                                        <br><br>

                                        <a href="{{url('approve_element', $element->id)}}"
                                            class="btn btn-outline-success btn-icon-text "><i
                                                class="mdi mdi-table-edit btn-icon-prepend"></i> Approve
                                        </a>

                                        <a href="{{url('reject_element', $element->id)}}"
                                            class="btn btn-outline-danger btn-icon-text "><i
                                                class="mdi mdi-table-edit btn-icon-prepend"></i>Reject
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

    </div>



    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('script')
    <!-- End custom js for this page -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>



</body>

</html>