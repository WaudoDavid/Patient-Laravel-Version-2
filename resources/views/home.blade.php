<!DOCTYPE html>
<html lang="en">

<head>


    @include('css')


</head>

<body>
    <div class="container-scroller">
        <div class="row p-0 m-0 proBanner" id="proBanner">
            <div class="col-md-12 p-0 m-0">

            </div>
        </div>
        <!-- partial:partials/_sidebar.html -->
        @include('sidebar')
        <!-- partial -->
        @include('navbar')
        @include('body')



        <!-- container-scroller -->
        <!-- plugins:js -->
        @include('script')
        <!-- End custom js for this page -->
    </div>
</body>

</html>