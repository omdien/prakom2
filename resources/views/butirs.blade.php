@extends('layouts.main')
@section('container')
    <h1 class="mb-3 text-center">{{ $title }}</h1>

    <div class="row justify-content-center mb-3">
      <div class="col-md-6">
        <form action="/butirs" method="GET">
          @if(request('kategori02'))
            <input type="hidden" name="kategori02" value="{{ request('kategori02') }}">
          @endif
          @if(request('jenjang'))
            <input type="hidden" name="jenjang" value="{{ request('jenjang') }}">
          @endif
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Cari" aria-label="Cari" name="cari" value="{{ request('cari') }}">
            <button class="btn btn-danger" type="submit">Cari</button>
          </div>
        </form>
      </div>
    </div>

    @if ($butirs->count())
    <div class="card mb-3">
        <img src="https://source.unsplash.com/1200x400?{{ $butirs[0]->bat_key }}" class="card-img-top" alt="{{ $butirs[0]->kategori02->kat02_kategori }}">
        <div class="card-body text-center">
            <a href="/butir/{{ $butirs[0]->but_slug }}" class="text-decoration-none text-dark"><h3 class="card-title">{{ $butirs[0]->but_kegiatan }}</h3></a>
          <p>
          <small class="">
            Kategori : <a href="/butirs?kategori02={{ $butirs[0]->kategori02->kat02_slug }}">  {{ $butirs[0]->kategori02->kat02_kategori}} </a> Jenjang: <a href="/butirs?jenjang={{ $butirs[0]->jenjang->jen_slug }}" class="text-decoration-none">{{ $butirs[0]->jenjang->jen_jenjang}}</a> {{ $butirs[0]->created_at->diffForHumans() }}
          </small>
          </p>
          <p class="card-text">{{ $butirs[0]->but_excerpt }}</p>
          <a href="/butir/{{ $butirs[0]->but_slug }}" class="text-decoration-none btn btn-primary">Baca Lebih Lanjut</a>
        </div>
    </div>
    

    <div class="container">
        <div class="row">
            @foreach($butirs->skip(1) as $butir)       
            <div class="col-md-4" mb-5>
                <div class="card">
                    <div class="position-absolute px-3 py-2 text-white" style="background-color:rgba(0, 0, 0, 0.7)"><a href="/butirs?jenjang={{ $butir->jenjang->jen_slug }}" class="text-white text-decoration-none">{{ $butir->jenjang->jen_slug }}</a></div>
                    <img src="https://source.unsplash.com/500x400/?{{ $butir->but_key }}" class="card-img-top" alt="{{ $butir->but_key }}">
                    <div class="card-body">
                      <h5 class="card-title"><a href="/butir/{{ $butir->but_slug }}" class="text-decoration-none">  {{ $butir->but_kegiatan }}</a></h5>
                      <small class="">
                        Kategori : <a href="/butirs?kategori02={{ $butir->kategori02->kat02_slug }}">  {{ $butir->kategori02->kat02_kategori}} </a> {{ $butir->created_at->diffForHumans() }}
                      </small>
                      <p class="card-text">{{ $butir->but_excerpt }}</p>
                      <a href="/butir/{{ $butir->but_slug }}" class="text-decoration-none btn btn-primary">Baca Lebih Lanjut</a>
                    </div>
                  </div>
            </div>
            @endforeach
        </div>
    </div>
    @else
        <p class="text-center fs-4">Tidak ada butir kegiatan</p>     
    @endif
    <div class="d-flex justify-content-end mt-3">
      {{ $butirs->links() }}
    </div>

@endsection