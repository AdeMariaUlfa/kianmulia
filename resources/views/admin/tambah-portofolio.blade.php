@extends('admin.layout-admin')
@section('content')
<div class="col-12">
    <div class="white-box">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <h3 class="box-title">Form Proyek</h3>
        <form method="post" action="{{route('portofolio.store')}}" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
            </div>
            <div class="form-group">
                <label>Nama Paket Pekerjaan</label>
                <input type="text" class="form-control" name="nama" required="required">
            </div>
            <div class="form-group">
                <label>Bidang Pekerjaan</label>
                <input type="text" class="form-control" name="bidang" required="required">
            </div>
            <div class="form-group">
                <label>Lokasi</label>
                <input type="text" class="form-control" name="lokasi" required="required">
            </div>
            <div class="form-group">
                <label>Pengguna Jasa</label>
                <input type="text" class="form-control" name="pengguna_jasa" required="required">
            </div>
            <div class="form-group">
                <label>Tahun</label>
                <input type="number" min="1900" max="2099" step="1" placeholder="2016" class="form-control" name="tahun" required="required">
            </div>
            <div class="form-group">
                <label>Dokumentasi</label>
                <input type="file" class="form-control" name="dokumentasi[]"  multiple accept="image/*">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
</div>
@endsection
