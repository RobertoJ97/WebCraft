<!DOCTYPE html>
<html lang="en">

@include('layout.head')
        
    </head>

    <body>

        <!-- Spinner Start -->
        <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" role="status"></div>
        </div>
        <!-- Spinner End -->

@include('layout.navbar')
    <!-- Carousel Start -->
        @include('layout.carousel')
        <!-- Carousel End -->


        <!-- Services Start -->
        @include('layout.services')
        <!-- Services End -->













        <!-- Copyright Start -->
        @include('layout.copyright')
        <!-- Copyright End -->



        <!-- Back to Top -->
        <a href="#" class="btn btn-primary btn-primary-outline-0 btn-md-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>


    @include('layout.js')
    </body>

</html>
