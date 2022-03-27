@extends('layouts.main')
@section('container')
    <h1 class="mb-5">Unsur Kegiatan</h1>
    <div class="container">
        <div class="row">
            @foreach($kategoris as $kategori)
            <div class="col-md-4">
                <div class="card bg-dark text-white">
                    <img src="https://source.unsplash.com/500x400/?computing" class="card-img-top" alt="computing">
                    <div class="card-img-overlay d-flex align-items-center p-0">
                        <h5 class="card-title text-center flex-fill p-4 fs-5" style="background-color:rgba(0,0,0,0.7)"><a href="/kategori1s/{{ $kategori->kat01_slug }}" class="text-decoration-none text-white">  {{ $kategori->kat01_kategori }}</a></h5>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection