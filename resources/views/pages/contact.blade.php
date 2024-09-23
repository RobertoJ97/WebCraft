<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Sparlex - Spa Website Template</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">
        @include('layout.css')
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


        <!-- Contact Start -->
        <div class="container-fluid contact py-5" >
            <div class="container pt-5">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-6">
                        <div class="text-center">
                            <h1 class="display-3 text-white mb-4">Contact Us</h1>
                            <p class="text-white fs-4">The contact form is currently inactive. Get a functional and working contact form with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code and youre done. <a class="text-secondary" href="https://htmlcodex.com/contact-form">Download Now</a>.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="contact-form rounded p-5">
                            <form>
                                <h1 class="display-6 mb-4">Do You have Any Questions?</h1>
                                <div class="row gx-4 gy-3">
                                    <div class="col-xl-6">
                                        <input type="text" class="form-control bg-white border-0 py-3 px-4" placeholder="Your First Name">
                                    </div>
                                    <div class="col-xl-6">
                                        <input type="email" class="form-control bg-white border-0 py-3 px-4" placeholder="Your Email">
                                    </div>
                                    <div class="col-xl-6">
                                        <input type="text" class="form-control bg-white border-0 py-3 px-4" placeholder="Your Phone">
                                    </div>
                                    <div class="col-xl-6">
                                        <input type="text" class="form-control bg-white border-0 py-3 px-4" placeholder="Subject">
                                    </div>
                                    <div class="col-12">
                                        <textarea class="form-control bg-white border-0 py-3 px-4" rows="4" cols="10" placeholder="Your Message"></textarea>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary btn-primary-outline-0 w-100 py-3 px-5" type="submit">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact End -->













        <!-- Copyright Start -->
        @include('layout.copyright')
        <!-- Copyright End -->



        <!-- Back to Top -->
        <a href="#" class="btn btn-primary btn-primary-outline-0 btn-md-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>


    @include('layout.js')
    </body>

</html>

