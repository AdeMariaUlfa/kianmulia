@extends('layout')
@section('content')
<div class="container-fluid bg-primary py-5 bg-header">
    <div class="row py-5">
        <div class="col-12 pt-lg-5 mt-lg-5 text-center">
            <h1 class="display-4 text-white animated zoomIn">Gas Meter</h1>
            <a href="" class="h5 text-white">Product & Manufacturing</a>
            <i class="far fa-circle text-white px-2"></i>
            <a href="" class="h5 text-white">Product & Manufacturing - Gas Meter</a>
        </div>
    </div>
</div>

<style>
    .bayangan {
        -moz-box-shadow: 10px 10px 5px #ccc;
        -webkit-box-shadow: 10px 10px 5px #ccc;
        box-shadow: 10px 10px 5px #ccc;
        -moz-border-radius: 25px;
        -webkit-border-radius: 25px;
    }
</style>

<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h2 class="mb-0">KEMAMPUAN KSM Tbk <br>DI BIDANG PRODUCT & MANUFACTURING - GAS METER</h2>
        </div>
        <div class="row g-5">
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s" style="visibility: visible; animation-delay: 0.9s; animation-name: slideInUp;">
                <div class="team-item bayangan bg-light rounded overflow-hidden">
                    <div class="team-img position-relative overflow-hidden">
                        <img class="img-fluid " style="border-radius:10px;" src="{{ asset('image-bisnis/product/sub/GASMETER/1.jpeg') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s" style="visibility: visible; animation-delay: 0.9s; animation-name: slideInUp;">
                <div class="team-item bayangan bg-light rounded overflow-hidden">
                    <div class="team-img position-relative overflow-hidden">
                        <img class="img-fluid" style="border-radius:10px;" src="{{ asset('image-bisnis/product/sub/GASMETER/5.jpeg') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s" style="visibility: visible; animation-delay: 0.9s; animation-name: slideInUp;">
                <div class="team-item bayangan bg-light rounded overflow-hidden">
                    <div class="team-img position-relative overflow-hidden">
                        <img class="img-fluid" style="border-radius:10px;" src="{{ asset('image-bisnis/product/sub/GASMETER/6.jpeg') }}" alt="">
                    </div>
                </div>
            </div>
           
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s" style="visibility: visible; animation-delay: 0.9s; animation-name: slideInUp;">
                <div class="team-item bayangan bg-light rounded overflow-hidden">
                    <div class="team-img position-relative overflow-hidden">
                        <img class="img-fluid" style="border-radius:10px;" src="{{ asset('image-bisnis/product/sub/GASMETER/4.jpeg') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s" style="visibility: visible; animation-delay: 0.9s; animation-name: slideInUp;">
                <div class="team-item bayangan bg-light rounded overflow-hidden">
                    <div class="team-img position-relative overflow-hidden">
                        <img class="img-fluid" style="border-radius:10px;" src="{{ asset('image-bisnis/product/sub/GASMETER/2.jpeg') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s" style="visibility: visible; animation-delay: 0.9s; animation-name: slideInUp;">
                <div class="team-item bayangan bg-light rounded overflow-hidden">
                    <div class="team-img position-relative overflow-hidden">
                        <img class="img-fluid" style="border-radius:10px;" src="{{ asset('image-bisnis/product/sub/GASMETER/3.jpeg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection