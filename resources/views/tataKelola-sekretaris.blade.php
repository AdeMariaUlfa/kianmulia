@extends('layout')
@section('content')
<div class="container-fluid bg-primary py-5 bg-header">
	<div class="row py-5">
		<div class="col-12 pt-lg-5 mt-lg-5 text-center">
			<h1 class="display-4 text-white animated zoomIn">Sekretaris Perusahaan</h1>
			<a href="" class="h5 text-white">Tata Kelola</a>
			<i class="far fa-circle text-white px-2"></i>
			<a href="" class="h5 text-white">Tata Kelola - Sekretaris Perusahaan</a>
		</div>
	</div>
</div>

<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
	<div class="container py-5">
		<div class="row g-5">
			<div class="col-lg-7"><BR><BR><BR><BR>
				<div class="section-title position-relative pb-3 mb-5">
					<h1 class="mb-0">SEKRETARIS PERUSAHAAN</h1>
				</div>
				<p class="mb-4">Sehubungan dengan pemenuhan POJK No. 35/2014, maka
					berdasarkan Surat Keputusan Direksi Nomor: 001/KSM-
					SK/VI/2023 tanggal 23 Juni 2023, Perseroan telah menunjuk
					<b>ADITYA RIZKY PUTRA</b> sebagai Sekretaris Perusahaan yang
					menjalankan tugas-tugas Sekretaris Perusahaan. Keterangan
					singkat dapat dilihat pada sub bab Pengurus dan Pengawasan
					Perseroan.
				</p>
			</div>
			<div class="col-lg-5" style="min-height: 400px;">
				<div class="position-relative h-100">
					<img class="position-absolute w-100 h-100 rounded wow zoomIn img-fluid rounded-circle" data-wow-delay="0.9s" src="{{ asset('template/img/Aditya Rizky Sekretaris Perusahaan (1).png') }}" style="object-fit: cover; visibility: visible; animation-delay: 0.9s; animation-name: zoomIn;">
				</div>
			</div>
		</div>
	</div>
</div>
@endsection