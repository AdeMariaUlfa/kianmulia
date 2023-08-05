@extends('layout')
@section('content')
<div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item">
            <img class="w-100" src="{{ asset('template/img/PRODUCT & MANUFACTURING.jpg') }}" alt="Image">
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                <div class="p-3" style="max-width: 900px;">
                    <h3 class="text-white mb-3 animated slideInDown">Selamat Datang Di</h3>
                    <h3 class="display-1 text-white animated zoomIn">PT KIAN SANTANG MULIATAMA Tbk</h3>
                    <a href="/profil-bisnis-product"><h4 class="text-white">- Product & Manufacturing -</h4></a>
                </div>
            </div>
        </div>
          <div class="carousel-item">
            <a><img class="w-100" src="{{ asset('template/img/service.png') }}" alt="Image">
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                <div class="p-3" style="max-width: 900px;">
                    <h3 class="text-white mb-3 animated slideInDown">Selamat Datang Di</h3>
                    <h3 class="display-1 text-white animated zoomIn">PT KIAN SANTANG MULIATAMA Tbk</h3>
                    <a href="/profil-bisnis-services"><h4 class="text-white">- Services -</h4></a>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <a><img class="w-100" src="{{ asset('template/img/trading.png') }}" alt="Image">
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                <div class="p-3" style="max-width: 900px;">
                    <h3 class="text-white mb-3 animated slideInDown">Selamat Datang Di</h3>
                    <h3 class="display-1 text-white animated zoomIn">PT KIAN SANTANG MULIATAMA Tbk</h3>
                    <a href="/profil-bisnis-trading"><h4 class="text-white">- Trading -</h4></a>
                </div>
            </div>
        </div>
        <div class="carousel-item active">
            <img class="w-100" src="{{ asset('template/img/epc.jpg') }}" alt="Image">
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                <div class="p-3" style="max-width: 900px;">
                    <h3 class="text-white mb-3 animated slideInDown">Selamat Datang Di</h3>
                    <h3 class="display-1 text-white animated zoomIn">PT KIAN SANTANG MULIATAMA Tbk</h3>
                    <a href="/profil-bisnis-epc"><h4 class="text-white">- EPC -</h4></a>
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
            <div class="col wow zoomIn" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: zoomIn;">
                <div class="bg-light shadow d-flex p-4" style="width:216px; height: 322px; border-radius:10px;">
                    <figure>
                        <img src="{{ asset('image-bisnis/epc/epc.jpg') }}" style="width:200px; height: 250px; margin-bottom:20px; border-radius:10px;" alt="">
                        <a href="/profil-bisnis-epc"><h5 class="text-orange mb-0 text-center">EPC</h5></a>
                    </figure>
                </div>
            </div>
            <div class="col wow zoomIn" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: zoomIn;">
            <div class="bg-orange shadow d-flex p-4" style="width:216px; height: 322px; border-radius:10px;">
                    <figure>
                        <img src="{{ asset('image-bisnis/product/product.jpg') }}" style="width:200px; height: 250px;  margin-bottom:10px; border-radius:10px;"  alt="">
                        <a href="/profil-bisnis-product"><h5 class="text-white mb-0 text-center">PRODUCT & MANUFACTURING</h5></a>
                    </figure>
                </div>
            </div>
            <div class="col wow zoomIn" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: zoomIn;">
                <div class="bg-light shadow d-flex p-4" style="width:216px; height: 322px; border-radius:10px;">
                    <figure>
                        <img src="{{ asset('image-bisnis/services/3.jpeg') }}" style="width:200px; height: 250px;  margin-bottom:20px; border-radius:10px;"  alt="">
                        <a href="/profil-bisnis-services"><h5 class="text-orange mb-0 text-center">SERVICES</h5></a>
                    </figure>
                </div>
            </div>
            <div class="col wow zoomIn" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: zoomIn;">
            <div class="bg-orange shadow d-flex p-4" style="width:216px; height: 322px; border-radius:10px;">
                    <figure>
                        <img src="{{ asset('image-bisnis/trading/TORMENE INDUSTRIALE.png') }}" style="width:200px; height: 250px;  margin-bottom:20px;  border-radius:10px;" alt="">
                        <a href="/profil-bisnis-trading"><h5 class="text-white mb-0 text-center">TRADING</h5></a>
                    </figure>
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
                    <h5 class="fw-bold text-dark text-uppercase">Tentang Kami</h5>
                    <h1 class="mb-0">PT KIAN SANTANG MULIATAMA Tbk</h1>
                </div>
                <p class="mb-4">Memberikan solusi terbaik bagi mitra bisnis kami berdasarkan kompetensi, profesionalisme, kepercayaan, dan motivasi untuk memenuhi tuntutan mitra bisnis dan selalu mengutamakan hubungan jangka panjang dengan mitra bisnis dan pengguna akhir di seluruh Indonesia.</p>
                <div class="row g-0 mb-3">
                    <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: zoomIn;">
                        <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>EPC</h5>
                        <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Product & Manufacturing</h5>
                    </div>
                    <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: zoomIn;">
                        <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Servis</h5>
                        <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Trading</h5>
                    </div>
                </div>
                <div class="d-flex align-items-center mb-4 wow fadeIn" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeIn;">
                    <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                        <i class="fa fa-phone-alt text-white"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="mb-2">Panggilan untuk mengajukan pertanyaan apapun</h5>
                        <h4 class="text-primary mb-0">(021) 82748249</h4>
                    </div>
                </div>
                <!-- <a href="/profil" class="btn btn-dark py-3 px-5 mt-3 wow zoomIn" data-wow-delay="0.9s" style="visibility: visible; animation-delay: 0.9s; animation-name: zoomIn;">Baca Lebih Lanjut</a> -->
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
                            <div class="carousel-item ">
                                    <video width="100%" height="100%" controls="" autoplay="" loop="" muted="" class="myvid" id="player">
                                        <source src="https://kianmulia.com/template/video/beranda.mp4" type="video/mp4">
                                    </video>
                            </div>
                            <div class="carousel-item active">
                                    <video width="100%" height="100%" controls="" autoplay="yes" loop="" muted="" class="myvid" id="player">
                                        <source src="https://kianmulia.com/template/video/KSM COMPRO OKE.mp4" type="video/mp4">
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
                    <h5 class="fw-bold text-dark text-uppercase">Video Kami</h5>
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
            <h1 class="mb-0">Pelayanan Terbaik Kita</h1>
        </div>
        <div class="row g-5">
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: slideInUp;">
                <div class="team-item bg-light rounded overflow-hidden">
                    <div class="team-img position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="{{ asset('template/img/service1.png') }}" alt="">
                    </div>
                    <div class="text-center py-4">
                        <h4 class="text-primary">Jargas Aceh 2021</h4>
                        <p class="text-uppercase m-0">- Pekerjaan Jaringan Gas Bumi Untuk Rumah Tangga -</p>
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
                        <p class="text-uppercase m-0">- Pekerjaan Jaringan Gas Bumi Untuk Rumah Tangga -</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s" style="visibility: visible; animation-delay: 0.9s; animation-name: slideInUp;">
                <div class="team-item bg-light rounded overflow-hidden">
                    <div class="team-img position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="{{ asset('template/img/service3.png') }}" alt="">
                    </div>
                    <div class="text-center py-4">
                        <h4 class="text-primary">Turbin Meter 2021</h4>
                        <p class="text-uppercase m-0">- Pekerjaan Turbin Meter TRZ03 K di PLN Belawan -</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection