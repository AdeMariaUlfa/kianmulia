@extends('layout')
@section('content')
<div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
    <div class="row py-5">
        <div class="col-12 pt-lg-5 mt-lg-5 text-center">
            <h1 class="display-4 text-white animated zoomIn">Prospektus</h1>
            <a href="" class="h5 text-white">Tentang Kami</a>
            <i class="far fa-circle text-white px-2"></i>
            <a href="" class="h5 text-white">Prospektus</a>
        </div>
    </div>
</div>

<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase">Prospektus</h5>
            <h1 class="mb-0">PT KIAN SANTANG MULIATAMA Tbk</h1>
        </div>
        <div class="row">
        <embed src="{{ asset('laporan/RGAS - Prospektus 5 Juli 2023 (BOD dan BOC).pdf') }}" type="application/pdf" frameBorder="0" scrolling="auto" width="400px;" height="650px;" />
        </div>
    </div>
</div>
@endsection