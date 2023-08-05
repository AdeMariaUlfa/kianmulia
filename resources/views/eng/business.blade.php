@extends('eng.layout2')
@section('content')
<div class="container-fluid bg-primary py-5 bg-header">
    <div class="row py-5">
        <div class="col-12 pt-lg-5 mt-lg-5 text-center">
            <h1 class="display-4 text-white animated zoomIn">Business</h1>
            <a href="" class="h5 text-white">About Us</a>
            <i class="far fa-circle text-white px-2"></i>
            <a href="" class="h5 text-white">Business</a>
        </div>
    </div>
</div>

<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase">Why Choose Us?</h5>
            <h1 class="mb-0">We Are Here To Grow Your Business</h1>
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
                        <h4 class="d-flex justify-content-end"><a href="/business-epc">EPC</a></h4>
                        <p class="mb-0">KSM has the ability to carry out <i>Engineering, Procurement, Construction,</i> work, especially in the industrial gas sector and <i>city gas</i>.</p>
                    </div>
                    <div class="col-12 wow zoomIn" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: zoomIn;">
                        <div class="d-flex justify-content-end">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-users-cog text-white"></i>
                            </div>
                        </div>
                        <h4 class="d-flex justify-content-end"><a href="/business-services">SERVICES</a></h4>
                        <p class="mb-0">Obtaining opportunities for calibration work (<i>wet cal</i>), repairing gas equipment, testing & commissioning from Oil & Gas companies</i>. Obtaining job opportunities for calibration (<i>what can</i> i>), gas equipment repair, testing & commissioning from <i>Oil & Gas</i> companies.</p>
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
                        <h4><a href="/business-product">PRODUCT & MANUFACTURING</a></h4>
                        <p class="mb-0"><i>Converter kit</i> ABG & Ergas, Household gas regulator & meter (Ergas), <i>transition fitting</i> (Kians), <i>pressure gauges, gas odorizing system, Metering & Regulating Station </i> (MRS), <i>Regulator Sector</i> (RS), <i>gas filter</i>.</p>
                    </div>
                    <div class="col-12 wow zoomIn" data-wow-delay="0.8s" style="visibility: visible; animation-delay: 0.8s; animation-name: zoomIn;">
                        <div class="d-flex">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-hands-helping  text-white"></i>
                            </div>
                        </div>
                        <h4><a href="/business-trading">TRADING</a></h4>
                        <p class="mb-0">Providing various kinds of equipment and systems related to gas installations.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection