<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>PT KIAN SANTANG MULIATAMA Tbk</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="{{ asset('template/img/favicon.ico') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/aileron" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('template/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('template/lib/animate/animate.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('template/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('template/css/style.css') }}" rel="stylesheet">
    @yield('css')
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-orange px-5 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i>Jatiluhur, Jatiasih, Bekasi City, West Java</small>
                    <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>(021) 82748249</small>
                    <small class="text-light"><i class="fa fa-clock me-2"></i>8AM-5PM</small>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-youtube fw-normal"></i></a>
                    <!-- <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><img src="{{ asset('template/img/eng.jpg') }}" alt="" width="25" height="25"></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><img src="{{ asset('template/img/ina.jpg') }}" alt="" width="25" height="25"></a> -->
                </div>
                <div class="change-language " title="Change Language">
                    <a href="/" class="language id "></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar & Carousel Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0" style="background:white;">
            <a href="{{ asset('template/index.html') }}" class="navbar-brand p-0">
                <img src="{{ asset('template/img/logonew.png') }}" alt="Image">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="/" class="nav-item nav-link active " style="color:#b97d29;">Home</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" style="color:#b97d29;">About Us</a>
                        <div class="dropdown-menu m-0">
                            <a href="/ourProfile" class="dropdown-item" style="color:#b97d29;">Our Profile</a>
                            <a href="/structure" class="dropdown-item" style="color:#b97d29;">Company Structure</a>
                            <a href="/board" class="dropdown-item" style="color:#b97d29;">Board of Management</a>
                            <a href="/business" class="dropdown-item" style="color:#b97d29;">Business</a>
                            <a href="/certificate" class="dropdown-item" style="color:#b97d29;">Certificate</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" style="color:#b97d29;">Portfolio</a>
                        <div class="dropdown-menu m-0">
                            <a href="/projek" class="dropdown-item" style="color:#b97d29;">Project</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" style="color:#b97d29;">Investors</a>
                        <div class="dropdown-menu m-0">
                            <a href="/investorInfo" class="dropdown-item" style="color:#b97d29;">Investor Info</a>
                            <a href="/investorLaporan" class="dropdown-item" style="color:#b97d29;">Annual Report & Financial Report</a>
                            <a href="/shareholders" class="dropdown-item" style="color:#b97d29;">Shareholders</a>
                            <a href="/profil-komisaris" class="dropdown-item" style="color:#b97d29;">General Meeting of Shareholders</a>
                            <a href="/profil-komisaris" class="dropdown-item" style="color:#b97d29;">Information Disclosure</a>
                            <a href="/profil-komisaris" class="dropdown-item" style="color:#b97d29;">Financial Data Overview</a>
                        </div>
                    </div>
                    <a href="/berita" class="nav-item nav-link" style="color:#b97d29;">News</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" style="color:#b97d29;">Contact Us</a>
                        <div class="dropdown-menu m-0">
                            <a href="/kontak" class="dropdown-item" style="color:#b97d29;">Contact</a>
                            <a href="#" class="dropdown-item" style="color:#b97d29;">Career</a>
                        </div>
                    </div>
                    <a href="{{route('login')}}" class="nav-item nav-link" style="color:#b97d29;">Login</a>
                </div>
                <!-- <a href="https://htmlcodex.com/startup-company-website-template" class="btn btn-primary py-2 px-4 ms-3">Download Pro Version</a> -->
            </div>
        </nav>

    </div>
    <!-- Navbar & Carousel End -->


    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-primary p-3" placeholder="Type search keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->

    <!-- isi konten -->
    @yield('content')

    <!-- Footer Start -->
    <div class="touch-line">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <p>PT. KSM Tbk was founded in 2018, this company is engaged in trade, development, industry, services and transportation. Currently the main focus is construction work which includes the construction of processing and storage of oil and gas goods, oil and gas installations, mechanical installations, and electrical installations.</p>
                </div>
                <div class="col-md-4">
                    <a class="btn btn-lg btn-dark btn-block" href="/kontak"> Contact Us</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-dark text-light wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-10 col-md-6">
                    <div class="row gx-5">
                        <div class="col-lg-4 col-md-12 pt-5 mb-5">
                            <img src="{{ asset('template/img/logonew-white.png') }}" alt=""><br><br>
                            <p>Engaged in the fields of Trade, Development, Industry, Services, and Transportation
                            </p>
                            <br>
                            <img src="{{ asset('template/img/iso.png') }}" width="80%" alt="">
                        </div>
                        <div class="col-lg-4 col-md-12 pt-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">Contact Us</h3>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-geo-alt text-primary me-2"></i>
                                <p class="mb-0">Jatiluhur, Jatiasih, Bekasi City, West Java</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-clock text-primary me-2"></i>
                                <p class="mb-0">8AM - 5PM</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-telephone text-primary me-2"></i>
                                <p class="mb-0">(021) 82748249</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-envelope text-primary me-2"></i>
                                <p class="mb-0">corsec@kianmulia.com</p>
                            </div>
                            <div class="d-flex mt-4">
                                <a class="btn btn-primary btn-square me-2" href="#"><i class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-primary btn-square me-2" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-primary btn-square me-2" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                                <a class="btn btn-primary btn-square" href="#"><i class="fab fa-instagram fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">Quick Links</h3>
                            </div>
                            <div class="link-animated d-flex flex-column justify-content-start">
                                <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                                <a class="text-light mb-2" href="/ourProfile"><i class="bi bi-arrow-right text-primary me-2"></i>Our Profile</a>
                                <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Portfolio</a>
                                <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Investors</a>
                                <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>News</a>
                                <a class="text-light" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Career</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid text-white" style="background: #061429;">
        <div class="container text-center">
            <div class="row justify-content-end">
                <div class="d-flex align-items-center justify-content-center" style="height: 75px;">
                    <p class="mb-0">&copy; <a class="text-white border-bottom" href="#">Kian Santang Muliatama Tbk</a>. All rights reserved.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-warning btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>

    @yield('js')
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('template/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('template/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('template/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('template/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('template/lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('template/js/main.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/js/bootstrap.min.js" integrity="sha384-3qaqj0lc6sV/qpzrc1N5DC6i1VRn/HyX4qdPaiEFbn54VjQBEU341pvjz7Dv3n6P" crossorigin="anonymous"></script>

</body>

</html>