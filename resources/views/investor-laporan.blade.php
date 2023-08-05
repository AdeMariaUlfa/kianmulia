@extends('layout')
@section('content')
<div class="container-fluid bg-primary py-5 bg-header">
    <div class="row py-5">
        <div class="col-12 pt-lg-5 mt-lg-5 text-center">
            <h1 class="display-4 text-white animated zoomIn">Laporan Tahunan & Keuangan</h1>
            <a href="" class="h5 text-white">Investor</a>
            <i class="far fa-circle text-white px-2"></i>
            <a href="" class="h5 text-white">Laporan</a>
        </div>
    </div>
</div>

<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
    <div class="container py-5">
        <p align="justify">
        Tiap tahunnya Perseroan menerbitkan Laporan Tahunan yang berisi informasi keuangan dan lainnya kepada publik. Informasi keuangan telah diaudit oleh audit publik sebelum diterbitkan. Anda dapat membaca laporan media massa yang dipilih, namun Anda juga dapat mengunduh laporan keuangan dan laporan tahunan dengan mengklik tombol di bawah ini:
        </p>
        <table class="styled-table table-responsive">
            <thead>
                <tr>
                    <th>Tahun</th>
                    <th>Laporan</th>
                    <th>File</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $laporan)
                <tr>
                    <td>{{$laporan->tahun}}</td>
                    <td>{{$laporan->judul}}</td>
                    <td><a href="{{asset('file-laporan/'.$laporan->file)}}" target="_blank" type="application/pdf" rel="alternate" media="print">Download</a></td>
                </tr>
               
               @endforeach
                <!-- and so on... -->
            </tbody>
        </table>
    </div>
</div>
@endsection
@section('js')
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
</script>
@endsection