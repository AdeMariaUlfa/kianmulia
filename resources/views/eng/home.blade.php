@extends('eng.layout2')
@section('content')
<div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">

        <div class="carousel-item">
            <img class="w-100" src="{{ asset('template/img/home2.png') }}" alt="Image">
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                <div class="p-3" style="max-width: 900px;">
                    <h3 class="text-white mb-3 animated slideInDown">Welcome To</h3>
                    <h3 class="display-1 text-white animated zoomIn">PT KIAN SANTANG MULIATAMA Tbk</h3>
                    <h5 class="text-white">- Construction -</h5>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img class="w-100" src="{{ asset('template/img/home1.png') }}" alt="Image">
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                <div class="p-3" style="max-width: 900px;">
                    <h3 class="text-white mb-3 animated slideInDown">Welcome To</h3>
                    <h3 class="display-1 text-white animated zoomIn">PT KIAN SANTANG MULIATAMA Tbk</h3>
                    <h5 class="text-white">- Services -</h5>
                </div>
            </div>
        </div>
        <div class="carousel-item active">
            <img class="w-100" src="{{ asset('template/img/beranda.jpg') }}" alt="Image">
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                <div class="p-3" style="max-width: 900px;">
                    <h3 class="text-white mb-3 animated slideInDown">Welcome To</h3>
                    <h3 class="display-1 text-white animated zoomIn">PT KIAN SANTANG MULIATAMA Tbk</h3>
                    <h5 class="text-white">- Trade -</h5>
                </div>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<div class="container-fluid facts py-5 pt-lg-0">
    <div class="container py-5 pt-lg-0">
        <div class="row gx-0">
            <div class="col-lg-4 wow zoomIn" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: zoomIn;">
                <div class="bg-orange shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                    <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                        <i class="fa fa-hands-helping text-orange"></i>
                    </div>
                    <div class="ps-3">
                        <h5 class="text-white mb-0">TRADE</h5>
                        <!-- <h1 class="text-white mb-0">12345</h1> -->
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow zoomIn" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: zoomIn;">
                <div class="bg-light shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                    <div class="bg-orange d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                        <i class="fa fa-user-cog text-white"></i>
                    </div>
                    <div class="ps-3">
                        <h5 class="text-orange mb-0">SERVICES</h5>
                        <!-- <h1 class="mb-0" data-toggle="counter-up">12345</h1> -->
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow zoomIn" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: zoomIn;">
                <div class="bg-orange shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                    <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                        <i class="fas fa-hard-hat text-orange"></i>
                    </div>
                    <div class="ps-3">
                        <h5 class="text-white mb-0">CONSTRUCTION</h5>
                        <!-- <h1 class="text-white mb-0" data-toggle="counter-up">12345</h1> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-7">
                <div class="section-title position-relative pb-3 mb-5">
                    <h5 class="fw-bold text-dark text-uppercase">About Us</h5>
                    <h1 class="mb-0">PT KIAN SANTANG MULIATAMA Tbk</h1>
                </div>
                <p class="mb-4">Providing the best solutions for our business partners based on competence, professionalism, trust and motivation to meet the demands of business partners and always prioritizing long-term relationships with business partners and end users throughout Indonesia.</p>
                <div class="row g-0 mb-3">
                    <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: zoomIn;">
                        <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Trade</h5>
                        <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Construction</h5>
                    </div>
                    <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: zoomIn;">
                        <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Services</h5>
                    </div>
                </div>
                <div class="d-flex align-items-center mb-4 wow fadeIn" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeIn;">
                    <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                        <i class="fa fa-phone-alt text-white"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="mb-2">Call to ask any questions</h5>
                        <h4 class="text-primary mb-0">(021) 82748249</h4>
                    </div>
                </div>
                <a href="/profil" class="btn btn-dark py-3 px-5 mt-3 wow zoomIn" data-wow-delay="0.9s" style="visibility: visible; animation-delay: 0.9s; animation-name: zoomIn;">Read More</a>
            </div>
            <div class="col-lg-5" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="{{ asset('template/img/tentang.jpg') }}" style="object-fit: cover; visibility: visible; animation-delay: 0.9s; animation-name: zoomIn;">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-8">
                    <div id="myCarousel" class="carousel slide" data-interval="false">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                    <video width="100%" height="100%" controls autoplay loop muted class="myvid" id="player">
                                        <source src="{{asset('template/video/beranda.mp4')}}" type="video/mp4">
                                    </video>
                                
                            </div>
                        </div>
                           

                        <a class="carousel-control-prev"  role="button" data-slide="prev" href="#myCarousel">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                        <a class="carousel-control-next"  role="button" data-slide="next" href="#myCarousel">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Back</span>
                        </a>
                    </div>
                </div>
        
            <div class="col-lg-4">
                <div class="section-title position-relative pb-3 mb-5">
                    <h5 class="fw-bold text-dark text-uppercase">Our Video</h5>
                    <h1 class="mb-0">PT KIAN SANTANG MULIATAMA Tbk</h1>
                </div>
                <div class="row g-0 mb-3">
                    <!-- <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: zoomIn;">
                        <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Perdagangan</h5>
                        <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Konstruksi</h5>
                    </div>
                    <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: zoomIn;">
                        <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Pelayanan</h5>
                    </div> -->
                    <!-- isi text -->
                </div>
            </div>

        </div>
    </div>
</div>

<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h1 class="mb-0">Our Best Services</h1>
        </div>
        <div class="row g-5">
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: slideInUp;">
                <div class="team-item bg-light rounded overflow-hidden">
                    <div class="team-img position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="{{ asset('template/img/service1.png') }}" alt="">
                    </div>
                    <div class="text-center py-4">
                        <h4 class="text-primary">Jargas Aceh 2021</h4>
                        <p class="text-uppercase m-0">- Natural Gas Network Work for Households -</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: slideInUp;">
                <div class="team-item bg-light rounded overflow-hidden">
                    <div class="team-img position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="{{ asset('template/img/service2.png') }}" alt="">
                    </div>
                    <div class="text-center py-4">
                        <h4 class="text-primary">Jargas Banggai 2021</h4>
                        <p class="text-uppercase m-0">- Natural Gas Network Work for Households -</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s" style="visibility: visible; animation-delay: 0.9s; animation-name: slideInUp;">
                <div class="team-item bg-light rounded overflow-hidden">
                    <div class="team-img position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="{{ asset('template/img/service3.png') }}" alt="">
                    </div>
                    <div class="text-center py-4">
                        <h4 class="text-primary">Meter Turbine 2021</h4>
                        <p class="text-uppercase m-0">- TRZ 03 K Turbine Meter Work at PLN Belawan -</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection