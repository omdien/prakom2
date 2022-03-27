@extends('layouts.main')
@section('container')
    <h1>Sub Unsur Kegiatan : {{ $kategori }}</h1>
    @foreach($kategori2 as $kategori)
        <article class="mb-3">
            <h2>
                <a href="/kategori2s/{{ $kategori->kat02_slug }}">  {{ $kategori->kat02_kategori }}</a>
            </h2>
        </article>
    @endforeach
@endsection