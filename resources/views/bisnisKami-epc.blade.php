@extends('layout')
@section('content')
<div class="container-fluid bg-primary py-5 bg-header">
    <div class="row py-5">
        <div class="col-12 pt-lg-5 mt-lg-5 text-center">
            <h1 class="display-4 text-white animated zoomIn">Bisnis</h1>
            <a href="" class="h5 text-white">Tentang Kami</a>
            <i class="far fa-circle text-white px-2"></i>
            <a href="" class="h5 text-white">Bisnis - EPC</a>
        </div>
    </div>
</div>

<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h2 class="mb-0">KEMAMPUAN KSM Tbk <br>DI BIDANG EPC</h2>
        </div>
        <section class="wrapper">
    <div class="container-fostrap">
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-4">
                        <div class="card">
                            <a class="img-card" href="">
                            <img src="{{ asset('image-bisnis/epc/DESIGNENGINEERING.jpg') }}" />
                          </a>
                            <div class="card-content">
                                <h4 class="card-title">
                                    <a href="">
                                    DESIGN & ENGINEERING
                                  </a>
                                </h4>
                                <p class="">
                                KSM memiliki SDM dengan latar belakang teknik (engineering) dengan keahlian: Electrical (Electronic, Instument, Telecommunication & Programming), Mechanical (Construction & Pipeline) and teknik sipil.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="card">
                            <a class="img-card" href="">
                            <img src="{{ asset('image-bisnis/epc/INFRASTRUCTURE WORKS.jpg') }}" />
                          </a>
                            <div class="card-content">
                                <h4 class="card-title">
                                    <a href="">
                                    INFRASTRUCTURE WORKS
                                  </a>
                                </h4>
                                <p class="">
                                Pipe Support, Utilities Foundation, Building, Yard, dan lain-lain.
                                </p><br><Br><br>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="card">
                            <a class="img-card" href="">
                            <img src="{{ asset('image-bisnis/epc/FABRICATION WORKS.jpg') }}" />
                          </a>
                            <div class="card-content">
                                <h4 class="card-title">
                                    <a href="/epc-fabrication">
                                        FABRICATION WORKS
                                  </a>
                                </h4>
                                <p class="">
                                Pressure Vessel, Skid, Pipe Spool, Control Panel, Wiring Installation, DCS Programming, dan lain-lain.
                                </p><Br><br>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-4">
                        <div class="card">
                            <a class="img-card" href="">
                            <img src="{{ asset('image-bisnis/epc/INSTALLATION AT SITE.jpg') }}" />
                          </a>
                            <div class="card-content">
                                <h4 class="card-title">
                                    <a href="/epc-installation">
                                    INSTALLATION AT SITE
                                  </a>
                                </h4>
                                <p class="">
                                - Mechanical Erection <br>
                                - Pipeline Connection<br>
                                - Rotating Equipment <br>
                                - Electrical<br>
                                - Instrumentation<br>
                                - Central Control Room
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="card">
                            <a class="img-card" href="">
                            <img src="{{ asset('image-bisnis/epc/TESTING _ COMMISSIONING.jpg') }}" />
                          </a>
                            <div class="card-content">
                                <h4 class="card-title">
                                    <a href="/epc-testing">
                                    TESTING & COMMISSIONING
                                  </a>
                                </h4>
                                <p class="">
                                - FAT<br>
                                - SAT<br>
                                - Testing <br>
                                - Commissioning <br>
                                - Running<br>
                                - Warranty
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    </div>
</div>
@endsection