@extends('layouts.main')
@section('container')
    <h1>Butir Kegiatan Jenjang : {{ $jenjang }}</h1>
    @foreach($butir as $butor)
        <article class="mb-3">
            <h2>
                <a href="/butir/{{ $butor->but_slug }}">  {{ $butor->but_kegiatan }}</a>
            </h2>
            <h5>Batasan Penilaian : {{ $butor["but_batasan"] }}</h5>
            <P>{{ $butor->but_desc }}</P>
        </article>
    @endforeach
@endsection