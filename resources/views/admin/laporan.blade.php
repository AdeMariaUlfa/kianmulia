@extends('admin.layout-admin')
@section('content')
@if (session('success'))
<div class="alert alert-success">{{ session('success') }}</div>
@endif
<div class="col-12">
    <div class="white-box">
        <div class="col-4">
            <a href="{{route('laporan.create')}}" class="btn btn-primary">Tambah</a>
        </div>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Tahun</th>
                    <th scope="col">Judul</th>
                    <th scope="col">File</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $laporan)
                <tr>
                    <td>{{$laporan->tahun}}</td>
                    <td>{{$laporan->judul}}</td>
                    <td> <a href="{{asset('file-laporan/'.$laporan->file)}}" class="btn btn-primary">Download</a>

                    </td>

                    <td>
                        <form action="{{route('laporan.destroy', $laporan->id)}}" method="post">
                            <a href="{{route('laporan.edit',$laporan->id)}}" class="btn btn-warning">Edit</a>
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