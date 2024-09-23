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

        <!-- About Start -->
        <div class="container-fluid about py-5">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-5">
                        <div class="video">
                            <img src="{{ asset('img/rj.jpg') }}" class="img-fluid rounded" alt="">
                            <div class="position-absolute rounded border-5 border-top border-start border-white" style="bottom: 0; right: 0;;">

                            </div>

                                <span></span>
                            </button>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <p class="fs-4 text-uppercase text-primary">About Us</p>
                        <h1 class="display-4 mb-3">WebCraftWorks</h1>
                        <p class="mb-4">We are a team of tech enthusiasts dedicated to delivering cutting-egde web development solutions.
                            Our expertise lies in creating custom websites, web applications, and e-commerce platforms tailored to meet the
                            unique needs of each client.
                            <p class="mb-4">With years of experience in the industry, we utilize the latest technologies and agile methodologies to
                                build websites that are not only visyally appealing but also optimized for performance and user experience. From concept
                                 and design to deployment and ongoing support, we are committed to exceeding expectations at every step.
                        </p>
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="d-flex align-items-center">
                                    <i class="fab fa-gitkraken fa-3x text-primary"></i>
                                    <div class="ms-4">
                                        <h5 class="mb-2">Personal Business</h5>
                                        <p class="mb-0">We take your business to the digital realm.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-gift fa-3x text-primary"></i>
                                    <div class="ms-4">
                                        <h5 class="mb-2">E-Commerce</h5>
                                        <p class="mb-0">We help you grow your sales and offer a user-friendly website for you and your customers.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="my-4">
                            Our costomer-centric approach allows us to deeply understand the goals and challenges of each project, ensuring that we deliver solutions that provide real value.
                            We work closely with our clients throughout the entire development process,offering personalized services and esuring the highlest level of quality.
                        </p>
                        <p class="mb-4">Whether you are looking for a corporate website,a robust e-commerce solutions, or a custom web application. WebCraftWork is here to turn vision
                            into reality.
                        </p>

                    </div>
                </div>
            </div>
        </div>
    <!-- About End -->










        <!-- Copyright Start -->
        @include('layout.copyright')
        <!-- Copyright End -->



        <!-- Back to Top -->
        <a href="#" class="btn btn-primary btn-primary-outline-0 btn-md-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>


    @include('layout.js')
    </body>

</html>
