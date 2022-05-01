@extends('layouts.main')
@section('container')
<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <h1 class="mb-3">{{ $butir->but_kegiatan }}</h1>
            <h5>Kategori :<a href="/butirs?kategori02={{ $butir->kategori02->kat02_slug }}" class="text-decoration-none"> {{ $butir->kategori02->kat02_kategori}}</a> Oleh Jenjang: <a href="/butirs?jenjang={{ $butir->jenjang->jen_slug }}" class="text-decoration-none">{{ $butir->jenjang->jen_jenjang}}</a></h5>
            @if($butir->but_gambar)
            <img src="{{ asset('storage/' . $butir->but_gambar) }}" alt="{{ $butir->kategori02->kat02_kategori }}" class="img-fluid">
            @else
            <img src="https://source.unsplash.com/1200x400?{{ $butir->bat_key }}" class="card-img-top my-3" alt="{{ $butir->kategori02->kat02_kategori }}">
            @endif
            <h6>Batasan Penilaian : {{ $butir->but_batasan}}</h6>
            <article class="my-3 fs-5">
                {!! $butir->but_desc !!}
            </article>
            <a href="/butirs">Kembali ke Butir Kegiatan</a>
        </div>
    </div>
</div>
@endsection