@extends('admin.layout-admin')
@section('content')
@if (session('success'))
<div class="alert alert-success">{{ session('success') }}</div>
@endif
<div class="col-12">
    <div class="white-box">
        <div class="col-4">
            <a href="{{route('career.create')}}" class="btn btn-primary">Tambah</a>
        </div>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Judul</th>
                    <th scope="col">Detail</th>
                    <th scope="col">Tanggal Posting</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $career)
                <tr>
                    <td>{{$career->judul}}</td>
                    <td> <a href="{{route('career.show',$career)}}" class="btn btn-primary">Detail</a>

                    </td>
                    <td>{{date('d-m-Y', strtotime($career->created_at))}}</td>

                    <td>
                        <form action="{{route('career.destroy',$career)}}" method="post">
                            <a href="{{route('career.edit',$career)}}" class="btn btn-warning">Edit</a>
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