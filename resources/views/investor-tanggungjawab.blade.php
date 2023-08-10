@extends('layout')
@section('content')
<div class="container-fluid bg-primary py-5 bg-header">
    <div class="row py-5">
        <div class="col-12 pt-lg-5 mt-lg-5 text-center">
            <h1 class="display-4 text-white animated zoomIn">Tanggung Jawab Sosial Perusahaan</h1>
            <a href="" class="h5 text-white">Investor</a>
            <i class="far fa-circle text-white px-2"></i>
            <a href="" class="h5 text-white">Tanggung Jawab Sosial Perusahaan</a>
        </div>
    </div>
</div>

<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-6 col-sm-6 ">
                <a><img src="{{ asset('template/img/csr.jpg') }}" style="width:600px; height:400px;" alt=""></a>
            </div>
            <div class="col-lg-6 col-sm-6">
                <h1>Tanggung Jawab Sosial Perusahaan</h1>
                <p align="justify">Pelaksanaan program yang berkaitan dengan Tanggung Jawab Sosial Perusahaan (Corporate Social Responsibility/CSR) dilakukan dengan mempertimbangkan pengembangan kualitas masyarakat sekitar kantor Perseroan dan masyarakat secara umum.
                    Sebagai kepedulian Perseroan akan Tanggung Jawab Sosial Perseroan maka sesuai dengan ketentuan peraturan perundang-undangan yang berlaku, Perseroan telah melakukan kegiatan sosial Perseroan (Corporate Social Responsibility) meliputi :
                </p>
                <ol class="t">
                    <li>
                        <b>Bidang Keagamaan </b> <br>
                        Perseroan melakukan berbagai kegiatan di bidang keagamaan meliputi buka puasa bersama, sumbangan kegiatan hari besar keagamaan dan pemberian dana bantuan pembangunan masjid.
                    </li>
                    <br>
                    <li>
                        <b>Bidang Sosial </b> <br>
                        Selain bidang keagamaan, Perseroan juga melakukan kegiatan bakti sosial ke panti asuhan, sumbangan HUT Republik Indonesia dan menjelang hari Raya Idul Fitri, Perseoran juga membagikan paket sembako untuk masyarakat sekitar.
                    </li>
                    <br>
                    <li>
                        <b>Bidang Pendidikan </b> <br>
                        Perseroan memberikan biaya pendidikan dan peralatan alat tulis untuk anak-anak panti asuhan.
                    </li>
                </ol>
            </div>
        </div>
    </div>
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-8">
                    <div id="myCarousel" class="carousel slide" data-interval="false">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                    <video width="100%" height="100%" controls="" autoplay="yes" loop="" muted="" class="myvid" id="player">
                                        <source src="https://kianmulia.com/template/video/Kegiatan Sosial Perseroan (CSR) PT KSM Tbk.mp4" type="video/mp4">
                                    </video>
                            </div>
                        </div>
                           

                        <a class="carousel-control-prev" role="button" data-slide="prev" href="#myCarousel">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                        <a class="carousel-control-next" role="button" data-slide="next" href="#myCarousel">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Back</span>
                        </a>
                    </div>
                </div>
        
            <div class="col-lg-4">
                <div class="section-title position-relative pb-3 mb-5">
                    <h5 class="fw-bold text-dark text-uppercase">Video Kami</h5>
                    <h1 class="mb-0">Kegiatan Sosial Perseroan (CSR)<br> PT KSM Tbk.</h1>
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
@endsection