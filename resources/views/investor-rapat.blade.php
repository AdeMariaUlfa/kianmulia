@extends('layout')
@section('content')
<div class="container-fluid bg-primary py-5 bg-header">
    <div class="row py-5">
        <div class="col-12 pt-lg-5 mt-lg-5 text-center">
            <h1 class="display-4 text-white animated zoomIn">Rapat Umum Pemegang Saham</h1>
            <a href="" class="h5 text-white">Investor</a>
            <i class="far fa-circle text-white px-2"></i>
            <a href="" class="h5 text-white">Rapat Umum Pemegang Saham</a>
        </div>
    </div>
</div>

<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
    <div class="container py-5">
        <p align="justify">
        Berisi pengumuman, undangan dan lain-lain terkait Rapat Umum Pemegang Saham :
        </p>
        <table class="styled-table table-responsive">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Laporan</th>
                    <th>File</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>RUPS Sirkuler KSM KBLI & Dirdekom</td>
                    <td><a href="{{ asset('laporan/RUPS Sirkuler KSM KBLI & Dirdekom.pdf') }}" target="_blank" type="application/pdf" rel="alternate" media="print">Download</a></td>
                </tr>
                <tr class="active-row">
                    <td>2</td>
                    <td>RUPS Sirkuler KSM LK 2022</td>
                    <td><a href="{{ asset('laporan/RUPS Sirkuler KSM LK 2022.pdf') }}" target="_blank" type="application/pdf" rel="alternate" media="print">Download</a></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>RUPS Sirkuler KSM Status TBK</td>
                    <td><a href="{{ asset('laporan/RUPS Sirkuler KSM Status TBK.pdf') }}" target="_blank" type="application/pdf" rel="alternate" media="print">Download</a></td>
                </tr>
               
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