@extends('layout')
@section('content')

<div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
    <div class="row py-5">
        <div class="col-12 pt-lg-5 mt-lg-5 text-center">
            <h1 class="display-4 text-white animated zoomIn">Susunan Pengurus</h1>
            <a href="" class="h5 text-white">Tentang Kami</a>
            <i class="far fa-circle text-white px-2"></i>
            <a href="" class="h5 text-white">Susunan Pengurus</a>
        </div>
    </div>
</div>

<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase">Susunan Pengurus</h5>
            <h1 class="mb-0">PT KIAN SANTANG MULIATAMA Tbk</h1>
        </div>
        <div class="row">
            <img src="{{ asset('template/img/susunan.png') }}" alt="">
        </div><br><br>
        <!-- <div class="row py-5">
            <div class="col-12 text-center">
                <div class="row">
                    <div class="card col-lg-6 col-md-6 vv profile-circel-image-200">
                        <img src="{{ asset('image-pengurus/FOTO AGUS SALIM-01-01 (1).png') }}" class="img-fluid rounded-circle" style="margin-top:20px;">
                        <h5 class="mb-3 mt-5">Agus Salim</h5>
                        <h6><i>Komisaris Utama</i></h6>
                        <p class="mb-4 text-muted">
                            Warga Negara Indonesia, lahir pada tahun 1965. Diangkat sebagai Komisaris Utama Perseroan sejak tahun 2020, terakhir diangkat kembali pada tahun 2023 dan memiliki masa jabatan sampai dengan 5 (lima) tahun sesuai dengan Anggaran Dasar Perseroan.
                            <br><br>
                            Memperoleh gelar Insinyur, kemudian Master of Science pada bidang Mechanical Engineering dari Delft University of Technology, Belanda, pada tahun 1993.
                        </p>
                    </div>
                    <div class="card col-lg-6 col-md-6 vv profile-circel-image-200">
                        <img src="{{ asset('image-pengurus/FOTO RICHARD-01-1-01-01 (1).png') }}" class="rounded img-fluid rounded-circle" style="margin-top:20px;">
                        <h5 class="mb-3 mt-5">Richard Leonardus A</h5>
                        <h6><i> Komisaris Independen</i></h6>
                        <p class="mb-4 text-muted">
                            Warga Negara Indonesia, lahir pada tahun 1976. Diangkat sebagai Komisaris Independen Perseroan sejak tahun 2023 dan memiliki masa jabatan sampai dengan 5 (lima) tahun sesuai dengan Anggaran Dasar Perseroan.
                            <br><br>
                            Memperoleh gelar Sarjana Ekonomi – Akuntansi dari Universitas Tarumanagara, pada tahun 2000.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="card col-lg-4 col-md-6 vv profile-circel-image-200">
                        <img src="{{ asset('image-pengurus/FOTO EDY NURHAMID (1).jpg') }}" class="img-fluid rounded-circle" style="margin-top:20px;">
                        <h5 class="mb-3 mt-5">Edy Nurhamid Amin </h5>
                        <h6><i>Direktur Utama</i></h6>
                        <p class="mb-4 text-muted">
                        Warga Negara Indonesia, lahir pada tahun 1969. Diangkat sebagai Direktur Utama Perseroan sejak tahun 2023 dan memiliki masa jabatan sampai dengan 5 (lima) tahun sesuai dengan Anggaran Dasar Perseroan.
                        <br><br>
                        Memperoleh gelar Sarjana Teknik Mesin dari Universitas Brawijaya, Malang, pada tahun 1992.
                        </p>
                    </div>
                    <div class="card col-lg-4 col-md-6 vv profile-circel-image-200">
                        <img src="{{ asset('image-pengurus/FOTO SUTARNO (1).jpg') }}" class="rounded img-fluid rounded-circle" style="margin-top:20px;">
                        <h5 class="mb-3 mt-5">Sutarno </h5>
                        <h6><i>Direktur</i></h6>
                        <p class="mb-4 text-muted">
                        Warga Negara Indonesia, lahir pada tahun 1962. Diangkat sebagai Direktur Perseroan sejak tahun 2023 dan memiliki masa jabatan sampai dengan 5 (lima) tahun sesuai dengan Anggaran Dasar Perseroan.
                        <br><br>
                        Memperoleh gelar Insinyur, kemudian Master of Science pada bidang Mechanical Engineering dari Delft University of Technology, Belanda, pada tahun 1993, Magister Ekonomi dari Universitas Trisakti pada tahun 2018.   
                        </p>
                    </div>
                    <div class="card col-lg-4 col-md-6 vv profile-circel-image-200">
                        <img src="{{ asset('image-pengurus/FOTO FADJAR TRI ANANDA - 01-01.png') }}" class="rounded img-fluid rounded-circle" style="margin-top:20px;">
                        <h5 class="mb-3 mt-5">Fadjar Tri Ananda</h5>
                        <h6><i>Direktur</i></h6>
                        <p class="mb-4 text-muted">
                        Warga Negara Indonesia, lahir pada tahun 1978. Diangkat sebagai Direktur Perseroan sejak tahun 2018, terakhir diangkat kembali pada tahun 2023 dan memiliki masa jabatan sampai dengan 5 (lima) tahun sesuai dengan Anggaran Dasar Perseroan.
                        <br><br>
                        Selesai menempuh pendidikan terakhir di SMA Negeri 39 Jakarta.
                        </p>
                    </div>
                </div>

            </div>
        </div> -->
        <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col">
                <div class="card vv profile-circel-image-200 text-center">
                    <img src="{{ asset('image-pengurus/Ir. Irvan Surya Dewantara.jpg') }}" class="img-fluid rounded-circle" style="margin-top:20px;">
                    <div class="card-body">
                        <h5 class="card-title text-center">Ir. Irvan Surya Dewantara</h5>
                        <h6 class="text-center"><i>Komisaris Utama</i></h6><br>
                        <p align="justify" class="card-text">Warga Negara Indonesia, lahir pada tahun 1965. Diangkat sebagai Komisaris Utama Perseroan sejak tahun 2023, memiliki masa jabatan sampai dengan 5 (lima) tahun sesai dengan Anggaran Dasar Perseroan.
                            <br><br>
                            Memperoleh gelar pada bidang Electrical Engineer dari Universitas Gajah Mada pada tahun 1985, Memperoleh gelar Insinyur pada bidang Electro Techniek dari Delft University of Technology, Belanda, pada tahun 1992.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card vv profile-circel-image-200  text-center">
                    <img src="{{ asset('image-pengurus/FOTO RICHARD-01-1-01-01 (1).png') }}" class="img-fluid rounded-circle" style="margin-top:20px;">
                    <div class="card-body">
                        <h5 class="card-title">Richard Leonardus Adikarta</h5>
                        <h6><i> Komisaris Independen</i></h6><br>
                        <p align="justify" class="card-text">
                            Warga Negara Indonesia, lahir pada tahun 1976. Diangkat sebagai Komisaris Independen Perseroan sejak tahun 2023 dan memiliki masa jabatan sampai dengan 5 (lima) tahun sesuai dengan Anggaran Dasar Perseroan.
                            <br><br>
                            Memperoleh gelar Sarjana Ekonomi – Akuntansi dari Universitas Tarumanagara, pada tahun 2000.
                            <br><br>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card vv profile-circel-image-200  text-center">
                    <img src="{{ asset('image-pengurus/FOTO EDY NURHAMID (1).jpg') }}" class="img-fluid rounded-circle" style="margin-top:20px;">
                    <div class="card-body">
                        <h5 class="card-title">Edy Nurhamid Amin</h5>
                        <h6><i>Direktur Utama</i></h6><br>
                        <p align="justify" class="card-text">
                        Warga Negara Indonesia, lahir pada tahun 1969. Diangkat sebagai Direktur Utama Perseroan sejak tahun 2023 dan memiliki masa jabatan sampai dengan 5 (lima) tahun sesuai dengan Anggaran Dasar Perseroan.
                        <br><br>
                        Memperoleh gelar Sarjana Teknik Mesin dari Universitas Brawijaya, Malang, pada tahun 1992.
                        <br><br><br><br>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card vv profile-circel-image-200  text-center">
                    <img src="{{ asset('image-pengurus/FOTO SUTARNO (1).jpg') }}" class="img-fluid rounded-circle" style="margin-top:20px;">
                    <div class="card-body">
                        <h5 class="card-title">Sutarno</h5>
                        <h6><i>Direktur</i></h6><br>
                        <p align="justify" class="card-text">
                        Warga Negara Indonesia, lahir pada tahun 1962. Diangkat sebagai Direktur Perseroan sejak tahun 2023 dan memiliki masa jabatan sampai dengan 5 (lima) tahun sesuai dengan Anggaran Dasar Perseroan.
                        <br><br>
                        Memperoleh gelar Insinyur, kemudian Master of Science pada bidang Mechanical Engineering dari Delft University of Technology, Belanda, pada tahun 1993, Magister Ekonomi dari Universitas Trisakti pada tahun 2018.   
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card vv profile-circel-image-200  text-center">
                    <img src="{{ asset('image-pengurus/FOTO FADJAR TRI ANANDA - 01-01.png') }}" class="img-fluid rounded-circle" style="margin-top:20px;">
                    <div class="card-body">
                        <h5 class="card-title">Fadjar Tri Ananda</h5>
                        <h6><i>Direktur</i></h6><br>
                        <p align="justify" class="card-text">
                        Warga Negara Indonesia, lahir pada tahun 1978. Diangkat sebagai Direktur Perseroan sejak tahun 2018, terakhir diangkat kembali pada tahun 2023 dan memiliki masa jabatan sampai dengan 5 (lima) tahun sesuai dengan Anggaran Dasar Perseroan.
                        <br><br>
                        Selesai menempuh pendidikan terakhir di SMA Negeri 39 Jakarta.<br><br><br><br>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection