@extends('layout')
@section('content')
<div class="container-fluid bg-primary py-5 bg-header">
    <div class="row py-5">
        <div class="col-12 pt-lg-5 mt-lg-5 text-center">
            <h1 class="display-4 text-white animated zoomIn">Sertifikat</h1>
            <a href="" class="h5 text-white">Tentang Kami</a>
            <i class="far fa-circle text-white px-2"></i>
            <a href="" class="h5 text-white">Sertifikat</a>
        </div>
    </div>
</div>

<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-4 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">PT Kian Santang Muliatama Tbk</h5>
                <h1 class="mb-0">Sertifikasi</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.6s">
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <img class="img-fluid rounded" src="{{ asset('template/img/qms.jpg') }}" style="width: 200px; height: 300px;" >
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">ISO 9001-2015 QMS</h4>
                            <small class="text-uppercase"></small>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                    <img class="img-fluid rounded" src="{{ asset('template/img/ems.jpg') }}" style="width: 200px; height: 300px;" >
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">ISO 14001-2015 EMS</h4>
                            <small class="text-uppercase"></small>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                    <img class="img-fluid rounded" src="{{ asset('template/img/anti.jpg') }}" style="width: 200px; height: 300px;" >
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">ISO 37001-2016 Anti Bribery</h4>
                            <small class="text-uppercase"></small>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                    <img class="img-fluid rounded" src="{{ asset('template/img/ohasas.jpg') }}" style="width: 200px; height: 300px;" >
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">ISO 45001-2018 OHASAS</h4>
                            <small class="text-uppercase"></small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection