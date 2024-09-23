<!DOCTYPE html>
<html lang="en">

@include('layout.head')

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


        <div class="container-fluid gallery py-5">
            <div class="container py-5">
                <div class="text-center mx-auto" style="max-width: 800px;">
                    <h2 class="mb-4 border-bottom">Our Developed Websites</h2>
                </div>
                <div class="tab-class text-center">

                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="row g-4">
                                <div class="col-lg-12">
                                    <div class="row g-4">
                                        <div class="col-lg-4">
                                            <div class="gallery-img">
                                                <img class="img-fluid rounded w-100" style="height: 200px !important;" src="{{ asset('img/4.jpeg') }}" alt="">
                                                <div class="gallery-overlay p-4">
                                                    <h4 class="text-secondary">Ecommerce</h4>
                                                </div>
                                                <div class="search-icon">
                                                    <a href="{{ asset('img/4.jpeg') }}" data-lightbox="Gallery-1" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="gallery-img">
                                                <img class="img-fluid rounded w-100" style="height: 200px !important;" src="{{ asset('img/5.jpeg') }}" alt="">
                                                <div class="gallery-overlay p-4">
                                                    <h4 class="text-secondary">Ecommerce</h4>
                                                </div>
                                                <div class="search-icon">
                                                    <a href="{{ asset('img/5.jpeg') }}" data-lightbox="Gallery-2" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="gallery-img">
                                                <img class="img-fluid rounded w-100" style="height: 200px !important;" src="{{ asset('img/6.jpg') }}" alt="">
                                                <div class="gallery-overlay p-4">
                                                    <h4 class="text-secondary">Ecommerce</h4>
                                                </div>
                                                <div class="search-icon">
                                                    <a href="{{ asset('img/6.jpg') }}" data-lightbox="Gallery-3" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                                </div>
                                            </div>
                                        </div>





                                    </div>
                                </div>
                            </div>
                        </div>




                    </div>
                </div>
            </div>
        </div>
        <!-- gallery End -->













        <!-- Copyright Start -->
        @include('layout.copyright')
        <!-- Copyright End -->



        <!-- Back to Top -->
        <a href="#" class="btn btn-primary btn-primary-outline-0 btn-md-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>


    @include('layout.js')
    </body>

</html>
