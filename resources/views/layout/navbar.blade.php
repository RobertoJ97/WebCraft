<!-- Navbar start -->
        <div class="container-fluid sticky-top px-0">
            <div class="container-fluid topbar d-none d-lg-block">
                <div class="container px-0">
                    <div class="row align-items-center">
                        <div class="col-lg-8">
                            <div class="d-flex flex-wrap">
                                <a href="tel:+15614127451" class="me-4 text-light"><i class="fas fa-phone-alt text-primary me-2"></i>+1(561) 412-7451</a>
                                <a href="mailto:rjramirez171@gmail.com" class="text-light"><i class="fas fa-envelope text-primary me-2"></i>rjramirez171@gmail.com</a>
                            </div>

                        </div>
                        <div class="col-lg-4">
                            <div class="d-flex align-items-center justify-content-end">

                                <a href="https://wa.me/15614127451" class="me-3 btn-square border rounded-circle nav-fill"><i class="fab fa-whatsapp"></i></a>
                                <a href="https://instagram.com/webcraftworks24/" class="me-3 btn-square border rounded-circle nav-fill"><i class="fab fa-instagram"></i></a>
                                <a href="https://www.tiktok.com/@webcraftwork" class="btn-square border rounded-circle nav-fill"><i class="fab fa-tiktok"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid bg-light">
                <div class="container px-0">
                    <nav class="navbar navbar-light navbar-expand-xl">
                        <a href="{{ route('home') }}" class="navbar-brand">
                            <h1 class="text-primary display-5 text-dark" style="font-family:Georgia, 'Times New Roman', Times, serif !important;" >WebCraftWorks</h1>
                        </a>
                        <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                            <span class="fa fa-bars text-primary"></span>
                        </button>
                        <div class="collapse navbar-collapse bg-light py-3" id="navbarCollapse">
                            <div class="navbar-nav mx-auto border-top">
                                <a href="{{ route('home') }}" class="nav-item nav-link {{ request()->routeIs('home') ? 'active':''}}">Home</a>
                                <a href="{{ route('pages.about') }}" class="nav-item nav-link {{ request()->routeIs('pages.about') ? 'active':''}}">About</a>
                                <a href="{{ route('pages.services') }}" class="nav-item nav-link {{ request()->routeIs('pages.services') ? 'active':''}}">Services</a>
                                <a href="{{ route('pages.gallery') }}" class="nav-item nav-link {{ request()->routeIs('pages.gallery') ? 'active':''}}">Gallery</a>


                            </div>
                            <div class="d-flex align-items-center flex-nowrap pt-xl-0">


                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Navbar End -->
