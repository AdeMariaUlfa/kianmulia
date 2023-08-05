@extends('admin.layout-admin')
@section('content')
@if (session('success'))
<div class="alert alert-success">{{ session('success') }}</div>
@endif
<div class="col-12">
    <div class="white-box">
        <div class="col-4">
            <a href="{{route('portofolio.create')}}" class="btn btn-primary">Tambah</a>
        </div>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Nama Paket Pekerjaan</th>
                    <th scope="col">Bidang Pekerjaan</th>
                    <th scope="col">Lokasi</th>
                    <th scope="col">Pengguna Jasa</th>
                    <th scope="col">Tahun</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $p)
                <tr>
                    <td>{{$p->nama_paket_pekerjaan}}</td>
                    <td>{{$p->bidang_pekerjaan}}</td>
                    <td>{{$p->lokasi}}</td>
                    <td>{{$p->pengguna_jasa}}</td>
                    <td>{{$p->tahun}}</td>
                    <td>
                        <form action="{{route('portofolio.destroy', $p->id)}}" method="post">
                            <a href="{{route('portofolio.edit',$p->id)}}" class="btn btn-warning">Edit</a>
                            |
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="DELETE" />
                            <button type="submit" class="btn btn-danger" style="color: white;">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection