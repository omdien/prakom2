@extends('layouts.main')
@section('container')
    @foreach($jenjangs as $jenjang)
        <article class="mb-3">
            <ul class="list-unstyled">
                <li><h5><a href="/jenjangs/{{ $jenjang->jen_slug }}">  {{ $jenjang->jen_jenjang }}</a><h5></li>
            </ul>
        </article>
    @endforeach
@endsection