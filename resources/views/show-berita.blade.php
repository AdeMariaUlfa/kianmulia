@extends('layout')
@section('content')


<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-7">
                <div class="col-6">
                    <img src="{{asset('image/'.$data->img)}}">
                </div>
                <br>
                <div class="section-title position-relative pb-3 mb-5">
                    <h1 class="mb-0">{{$data->judul}}</h1>
                </div>
                <p class="mb-4">
                    {!!$data->isi !!}
                </p>
            </div>
        </div>
    </div>
</div>

</div>
@endsection