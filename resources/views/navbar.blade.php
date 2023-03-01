    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar p-0 fixed-top d-flex flex-row">
            <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
                <a class="navbar-brand brand-logo-mini" href="{{url('')}}"><img src="assets/images/hos2.svg"
                        alt="logo" /></a>
            </div>
            <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="mdi mdi-menu"></span>
                </button>

                <ul class="navbar-nav w-100">
                    <li class="nav-item w-100">
                        <form class="form-inline nav-link mt-2 mt-md-0 d-none d-lg-flex search" method="GET"
                            action="{{url('search_patient')}}">
                            <input type="text" class="form-control" name="query"
                                placeholder="Search patient name, ID or phone number"
                                style="color: white !important;background-color: #2a3038 !important;">
                            <button type="submit" class="btn btn-primary">SEARCH </button>
                        </form>
                    </li>
                </ul>

                <ul class=" navbar-nav navbar-nav-right">
                    <li class="nav-item dropdown d-none d-lg-block">
                        <a class="nav-link btn btn-success create-new-button" aria-expanded="false"
                            href="{{url('add_patient')}}">+ Add new patient</a>
                    </li>


                    <li class="nav-item dropdown">
                        <a class="nav-link" id="profileDropdown" data-bs-toggle="dropdown">
                            <div class="navbar-profile">
                                <img class="img-xs rounded-circle" src="assets/images/faces/face18.jpg">
                                <p class="mb-0 d-none d-sm-block navbar-profile-name">Manish Devda</p>

                            </div>
                        </a>

                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                    data-toggle="offcanvas">
                    <span class="mdi mdi-format-line-spacing"></span>
                </button>
            </div>
        </nav>