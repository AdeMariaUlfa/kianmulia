@extends('eng.layout2')
@section('content')
        <div class="container-fluid bg-primary py-5 bg-header">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">Our Profile</h1>
                    <a href="" class="h5 text-white">About Us</a>
                    <i class="far fa-circle text-white px-2"></i>
                    <a href="" class="h5 text-white">Our Profile</a>
                </div>
            </div>
        </div>
        
        <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">A Brief History</h5>
                        <h1 class="mb-0">PT KIAN SANTANG MULIATAMA Tbk</h1>
                    </div>
                    <p class="mb-4">
                    <b>PT Kian Santang Muliatama Tbk ("Company" or "KSM")</b> is a company engaged in supporting services for the gas industry, covering the supply of products (spare parts) to engineering, procurement and construction (EPC).<br> <br>
                     Headquartered in Bekasi City, West Java, KSM was established in 2018 and is managed by individuals who are experienced in the oil & gas sector, particularly in gas infrastructure.
                    </p>
                    <a href="quote.html" class="btn btn-primary py-3 px-5 mt-3 wow zoomIn" data-wow-delay="0.9s" style="visibility: visible; animation-delay: 0.9s; animation-name: zoomIn;">Read More</a>
                </div>
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="http://127.0.0.1:8000/template/img/profil.png" style="object-fit: cover; visibility: visible; animation-delay: 0.9s; animation-name: zoomIn;">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">PT KIAN SANTANG MULIATAMA</h5>
                <h1 class="mb-0">VISI & MISI</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4">
                    <div class="row g-5">
                        <div class="col-12 wow zoomIn" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: zoomIn;">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-cubes text-white"></i>
                            </div>
                            <h4>Terbaik Dalam Industry</h4>
                            <p class="mb-0">Komitmen untuk memberikan yang terbaik bagi pelanggan.
                            Selalu berorientasi pada kepuasan pelanggan dengan mengutamakan profesionalisme, inovasi, kompetensi, dan tanggung jawab.</p>
                        </div>
                        <div class="col-12 wow zoomIn" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: zoomIn;">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-award text-white"></i>
                            </div>
                            <h4>Memberikan Manfaat dan Kebahagiaan</h4>
                            <p class="mb-0">Memberikan manfaat dan kebahagiaan bagi pelanggan, mitra bisnis, perusahaan, dan karyawan.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4  wow zoomIn" data-wow-delay="0.9s" style="min-height: 350px; visibility: visible; animation-delay: 0.9s; animation-name: zoomIn;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.1s" src="http://127.0.0.1:8000/template/img/visi.jpeg" style="object-fit: cover; visibility: visible; animation-delay: 0.1s; animation-name: zoomIn;">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row g-5">
                        <div class="col-12 wow zoomIn" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: zoomIn;">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-users-cog text-white"></i>
                            </div>
                            <h4>Profesional </h4>
                            <p class="mb-0">Misi kami adalah perusahaan profesional dan terpercaya di Indonesia dan menyebarkan kebahagiaan untuk semua.</p>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-5">
                <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="{{ asset('template/img/profil2.jpg') }}" style="object-fit: cover; visibility: visible; animation-delay: 0.9s; animation-name: zoomIn;">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h1 class="mb-0">OUR VISION</h1>
                    </div>
                    <div class="row gx-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: zoomIn;">
                            <h5 class="mb-4"><i class="fa fa-handshake text-primary me-3"></i>Competent</h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: zoomIn;">
                            <h5 class="mb-4"><i class="fa fa-plus text-primary me-3"></i>Provide Benefits</h5>
                        </div>
                    </div>
                    <p class="mb-4">
                    EPC companies, industry, trade and services that are competent in their fields prioritize the use of domestic products and services for greater benefits for Indonesia.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h1 class="mb-0">OUR MISSION</h1>
                    </div>
                    <div class="row gx-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: zoomIn;">
                            <h5 class="mb-4"><i class="fa fa-star text-primary me-3"></i>Domestic Products & Services</h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: zoomIn;">
                            <h5 class="mb-4"><i class="fa fa-thumbs-up text-primary me-3"></i>Trusted</h5>
                        </div>
                    </div>
                    <p class="mb-4">
                    - Prioritizing domestic products and services.<br>
                    - Develop domestic products and services.<br>
                    - Developing business in the era of disruptive economy.<br>

                    </p>
                   
                </div>
                <div class="col-lg-5">
                <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="{{ asset('template/img/profil3.jpg') }}" style="object-fit: cover; visibility: visible; animation-delay: 0.9s; animation-name: zoomIn;">
                    </div>
                </div>
                </div>
            </div>
        </div>
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h1 class="mb-0">The Legality of The Company</h1>
            </div>
            <div class="row">
            <img src="{{ asset('template/img/legal.png') }}" alt="">
            </div>
        </div>
    </div>
@endsection