@extends('layout')
@section('content')
<div class="container-fluid bg-primary py-5 bg-header">
    <div class="row py-5">
        <div class="col-12 pt-lg-5 mt-lg-5 text-center">
            <h1 class="display-4 text-white animated zoomIn">Bisnis</h1>
            <a href="" class="h5 text-white">Tentang Kami</a>
            <i class="far fa-circle text-white px-2"></i>
            <a href="" class="h5 text-white">Bisnis</a>
        </div>
    </div>
</div>

<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase">Kenapa Memilih Kami</h5>
            <h1 class="mb-0">Kami Hadir Untuk Mengembangkan Bisnis Anda</h1>
        </div>
        <div class="row g-5">
            <div class="col-lg-4">
                <div class="row g-5">
                    <div class="col-12 wow zoomIn" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: zoomIn;">
                        <div class="d-flex justify-content-end">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-cubes text-white"></i>
                            </div>
                        </div>
                        <h4 class="d-flex justify-content-end"><a href="/profil-bisnis-epc">EPC</a></h4>
                        <p class="mb-0">KSM memiliki kemampuan melaksanakan pekerjaan <i>Engineering, Procurement, Construction,</i> utamanya di sektor gas industri dan <i>city gas</i>. </p>
                    </div>
                    <div class="col-12 wow zoomIn" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: zoomIn;">
                        <div class="d-flex justify-content-end">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-users-cog text-white"></i>
                            </div>
                        </div>
                        <h4 class="d-flex justify-content-end"><a href="/profil-bisnis-services">SERVICES</a></h4>
                        <p class="mb-0">Meraih peluang pekerjaan kalibrasi (<i>wet cal</i>), repair gas equipment, testing & komisioning dari perusahaan-perusahaan <i>Oil & Gas</i>.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4  wow zoomIn" data-wow-delay="0.9s" style="min-height: 350px; visibility: visible; animation-delay: 0.9s; animation-name: zoomIn;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.1s" src="{{ asset('template/img/bisnis.png') }}" style="object-fit: cover; visibility: visible; animation-delay: 0.1s; animation-name: zoomIn;">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="row g-5">
                    <div class="col-12 wow zoomIn" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: zoomIn;">
                        <div class="d-flex">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fas fa-box text-white"></i>
                            </div>
                        </div>
                        <h4><a href="/profil-bisnis-product">PRODUCT & MANUFACTURING</a></h4>
                        <p class="mb-0"><i>Converter kit</i> ABG & Ergas, Regulator & meter gas Rumah Tangga (Ergas), <i>transition fitting</i> (Kians), <i>pressure gauges, gas odorizing system, Metering & Regulating Station</i> (MRS), <i>Regulator Sector</i> (RS), <i>gas filter</i>.</p>
                    </div>
                    <div class="col-12 wow zoomIn" data-wow-delay="0.8s" style="visibility: visible; animation-delay: 0.8s; animation-name: zoomIn;">
                        <div class="d-flex">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-hands-helping  text-white"></i>
                            </div>
                        </div>
                        <h4><a href="/profil-bisnis-trading">TRADING</a></h4>
                        <p class="mb-0">Menyediakan berbagai macam peralatan dan sistem yang terkait dengan instalasi gas.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection