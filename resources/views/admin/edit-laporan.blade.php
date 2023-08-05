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
        <h3 class="box-title">Edit Laporan</h3>
        <form method="post" action="{{route('laporan.update',$data->id)}}" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
            <div class="form-group">
                <div class="preview">
                    <img id="file-ip-1-preview">
                </div>
            </div>
            <div class="form-group">
                <label>Tahun</label>
                <input type="number" min="1900" max="2099" step="1" placeholder="2016" class="form-control" value="{{$data->tahun}}" name="tahun" required="required">
            </div>
            <div class="form-group">
                <label>Judul Laporan</label>
                <input type="text" class="form-control" name="judul" value="{{$data->judul}}" required="required">
            </div>
            <div class="form-group">
                <label>File Laporan</label>
                <input type="file" class="form-control" name="file">
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
</div>
@endsection
