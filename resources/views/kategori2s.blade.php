@extends('layouts.main')
@section('container')
    @foreach($kategoris as $kategori)
        <article class="mb-3">
            <ul class="list-unstyled">
                <li><h5><a href="/kategori2s/{{ $kategori->kat02_slug }}">  {{ $kategori->kat02_kategori }}</a><h5></li>
            </ul>
        </article>
    @endforeach
@endsection