<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        <a class="sidebar-brand brand-logo" href="{{url('')}}"><img src="assets/images/hos.svg" alt="logo" /></a>
        <a class="sidebar-brand brand-logo-mini" href="{{url('')}}"><img src="assets/images/hos2.svg" alt="logo" /></a>
    </div>
    <ul class="nav">
        <li class="nav-item profile">
            <div class="profile-desc">
                <div class="profile-pic">
                    <div class="count-indicator">
                        <img class="img-xs rounded-circle " src="assets/images/faces/face18.jpg" alt="">
                        <span class="count bg-success"></span>
                    </div>
                    <div class="profile-name">
                        <h5 class="mb-0 font-weight-normal">Manish Devda</h5>
                        <span>Administrator</span>
                    </div>
                </div>


            </div>
        </li>
        <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
        </li>



        <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('add_patient')}}">
                <span class="menu-icon">
                    <i class="mdi mdi-human"></i>
                </span>
                <span class="menu-title">Add patient</span>
            </a>
        </li>


        <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('')}}">
                <span class="menu-icon">
                    <i class="mdi mdi-account-card-details"></i>
                </span>
                <span class="menu-title">Patient List</span>
            </a>
        </li>

        <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('add_element')}}">
                <span class="menu-icon">
                    <i class="mdi mdi-medical-bag"></i>
                </span>
                <span class="menu-title">Elements</span>

            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('add_element')}}">
                <span class="menu-icon">
                    <i class="mdi mdi-table-of-contents"></i>
                </span>
                <span class="menu-title">Elements table</span>
            </a>
        </li>







    </ul>
</nav>