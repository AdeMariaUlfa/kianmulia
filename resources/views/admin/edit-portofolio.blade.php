@extends('admin.layout-admin')
@section('css')
<style>
    .img-pos {
        position: relative;
        text-align: center;
        color: white;
    }

    .top-left {
        position: absolute;
        top: 8px;
        left: 16px;
        background-color: white;
        border-radius: 100%;
        border: 2px solid black;
    }
</style>
@endsection
@section('content')
@if (session('success'))
<div class="alert alert-success">{{ session('success') }}</div>
@endif
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
        <h3 class="box-title">Edit Proyek</h3>
        <form method="post" action="{{route('portofolio.update',$data->id)}}" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
            <div class="form-group">
            </div>
            <div class="form-group">
                <label>Nama Paket Pekerjaan</label>
                <input type="text" class="form-control" name="nama" required="required" value="{{$data->nama_paket_pekerjaan}}">
            </div>
            <div class="form-group">
                <label>Bidang Pekerjaan</label>
                <input type="text" class="form-control" name="bidang" required="required" value="{{$data->bidang_pekerjaan}}">
            </div>
            <div class="form-group">
                <label>Lokasi</label>
                <input type="text" class="form-control" name="lokasi" required="required" value="{{$data->lokasi}}">
            </div>
            <div class="form-group">
                <label>Pengguna Jasa</label>
                <input type="text" class="form-control" name="pengguna_jasa" required="required" value="{{$data->pengguna_jasa}}">
            </div>
            <div class="form-group">
                <label>Tahun</label>
                <input type="number" min="1900" max="2099" step="1" placeholder="2016" class="form-control" name="tahun" required="required" value="{{$data->tahun}}">
            </div>
            <div class="form-group">
                <label>Dokumentasi</label>
                <div class="d-flex flex-row">
                    <div class="col-4 px-3">
                        <input type="file" class="form-control" name="dokumentasi[]" multiple accept="image/*">
                    </div>
                    <button type="submit" class="btn btn-success" name="submit" value="tambah">Tambah</button>
                </div>
            </div>
            <div class="form-group">
                <div class="d-flex flex-row">
                    @if (count($data->dokumentasi)>0)
                    @foreach ($data->dokumentasi as $img)
                    <div class="p-2">
                        <div class="img-pos">
                            <img src="{{asset('file-dokumentasi/'.$img->dokumentasi)}}" class="img-responsive" style="max-height: 200px; max-width: 200px; border-radius: 10px; border: 5px solid black;" alt="" srcset="">
                            <a class="btn text-danger top-left" href="{{route('hapus-dokumentasi',$img->id)}}">X</a>
                        </div>
                    </div>
                    @endforeach
                    @endif
                </div>

            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary" name="submit" value="update">Save</button>
            </div>
        </form>




    </div>
</div>
@endsection