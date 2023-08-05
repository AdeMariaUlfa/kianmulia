@extends('layout')
@section('content')
<div class="container-fluid bg-primary py-5 bg-header">
    <div class="row py-5">
        <div class="col-12 pt-lg-5 mt-lg-5 text-center">
            <h1 class="display-4 text-white animated zoomIn">Trading</h1>
            <a href="" class="h5 text-white">Tentang Kami</a>
            <i class="far fa-circle text-white px-2"></i>
            <a href="" class="h5 text-white">Bisnis - Trading</a>
        </div>
    </div>
</div>

<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h2 class="mb-0">KEMAMPUAN KSM Tbk <br>DI BIDANG Trading</h2>
        </div>
        <section class="wrapper">
    <div class="container-fostrap">
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <a class="img-card" href="">
                            <img style="width:80%;" src="{{ asset('image-bisnis/trading/CANALTA.png') }}" />
                          </a>
                            <div class="card-content">
                                <h4 class="card-title text-center">
                                    <a href="/trading-canalta">
                                    CANALTA
                                  </a>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <a class="img-card" href="">
                            <img style="width:80%;" src="{{ asset('image-bisnis/trading/HONEYWELL.png') }}" />
                          </a>
                            <div class="card-content">
                                <h4 class="card-title text-center">
                                    <a href="/trading-honeywell">
                                    HONEYWELL
                                  </a>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <a class="img-card" href="">
                            <img style="width:80%;" src="{{ asset('image-bisnis/trading/RMG.png') }}" />
                          </a>
                            <div class="card-content">
                                <h4 class="card-title text-center">
                                    <a href="/trading-rmg">
                                    RMG
                                  </a>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <a class="img-card" href="">
                            <img style="width:80%;" src="{{ asset('image-bisnis/trading/TORMENE INDUSTRIALE.png') }}" />
                          </a>
                            <div class="card-content text-center">
                                <h4 class="card-title">
                                    <a href="/trading-tormene">
                                    TORMENE INDUSTRIALE
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