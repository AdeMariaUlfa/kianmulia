@extends('layout')
@section('content')
<div class="container-fluid bg-primary py-5 bg-header">
    <div class="row py-5">
        <div class="col-12 pt-lg-5 mt-lg-5 text-center">
            <h1 class="display-4 text-white animated zoomIn">Karir</h1>
            <a href="" class="h5 text-white">Kontak Kami</a>
            <i class="far fa-circle text-white px-2"></i>
            <a href="" class="h5 text-white">Karir</a>
        </div>
    </div>
</div>

<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h2 class="mb-0">Lowongan Pekerjaan PT. Kian Santang Muliatama Tbk</h2>
        </div>
        <section class="wrapper">
            <div class="container-fostrap">
                <div class="content">
                    <div class="container">
                        <div class="row">
                          
                            <div class="col-lg-12">
                                <div class="card" >
                                    <a class="img-card" href="">
                                        <img style="width:80%;" src="{{ asset('image/asisten.jpg') }}" />
                                    </a>
                                    <div class="card-content" style="margin-bottom:95px;">
                                        <h4 class="card-title text-center">
                                            <a href="#">
                                                {{$career->judul}}
                                            </a>
                                        </h4><br>
                                        <h6>
                                            Requirements: <br>
                                            {!!$career->requirement!!}
                                            <br>
                                            Lamaran dikirim ke email : <b>hrd@kianmulia.com</b> dengan mencantumkan posisi yang dilamar.
                                        </h6>
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