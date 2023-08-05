@extends('layout')
@section('content')
<div class="container-fluid bg-primary py-5 bg-header">
    <div class="row py-5">
        <div class="col-12 pt-lg-5 mt-lg-5 text-center">
            <h1 class="display-4 text-white animated zoomIn">Product & Manufacturing</h1>
            <a href="" class="h5 text-white">Tentang Kami</a>
            <i class="far fa-circle text-white px-2"></i>
            <a href="" class="h5 text-white">Bisnis - Product & Manufacturing</a>
        </div>
    </div>
</div>

<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h2 class="mb-0">KEMAMPUAN KSM Tbk <br>DI BIDANG Product & Manufacturing</h2>
        </div>
        <section class="wrapper">
    <div class="container-fostrap">
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-4">
                        <div class="card">
                            <a class="img-card" href="">
                            <img src="{{ asset('image-bisnis/product/GAS METER.png') }}" />
                          </a>
                            <div class="card-content">
                                <h4 class="card-title">
                                    <a href="/product-gas">
                                    GAS METER
                                  </a>
                                </h4><br>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="card">
                            <a class="img-card" href="">
                            <img src="{{ asset('image-bisnis/product/KONVERTER KIT.png') }}" />
                          </a>
                            <div class="card-content">
                                <h4 class="card-title">
                                    <a href="/product-konverter">
                                    KONVERTER KIT
                                  </a>
                                </h4><br>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="card">
                            <a class="img-card" href="">
                            <img src="{{ asset('image-bisnis/product/METERING REGULATING STATION.png') }}" />
                          </a>
                            <div class="card-content">
                                <h4 class="card-title">
                                    <a href="/product-metering">
                                    METERING REGULATING STATION
                                  </a>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-4">
                        <div class="card">
                            <a class="img-card" href="">
                            <img src="{{ asset('image-bisnis/product/REGULATING STATION.png') }}" />
                          </a>
                            <div class="card-content">
                                <h4 class="card-title">
                                    <a href="/product-regulating">
                                    REGULATING STATION
                                  </a>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="card">
                            <a class="img-card" href="">
                            <img src="{{ asset('image-bisnis/product/REGULATOR.png') }}" />
                          </a>
                            <div class="card-content">
                                <h4 class="card-title">
                                    <a href="/product-regulator">
                                    REGULATOR
                                  </a>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="card">
                            <a class="img-card" href="">
                            <img src="{{ asset('image-bisnis/product/TRANSITION FITTING.png') }}" />
                          </a>
                            <div class="card-content">
                                <h4 class="card-title">
                                    <a href="">
                                    TRANSITION FITTING
                                  </a>
                                </h4>
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