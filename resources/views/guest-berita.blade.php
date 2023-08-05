@extends('layout')
@section('content')
<br>

<div class="container-fluid py-5 " style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
    <div class="container py-5">
        <div class="row g-5">
            @foreach($data as $d)
            <div class="card mb-3">
                <img class="card-img-top" src="{{asset('image/'.$d->img)}}" width="780" height="180" style=" object-fit: cover;" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{$d->judul}}</h5>
                    <p class="card-text"> {!!$d->isi !!}</p>
                    <p class="card-text"><a href="{{route('berita.show',$d->id)}}" class="btn btn-primary">Baca</a></p>
                    <p class="card-text"><small class="text-muted">{{date('d-m-Y', strtotime($d->created_at))}}</small></p>
                </div>
            </div>

            @endforeach
        </div>
    </div>
</div>

</div>
@endsection