@extends('layouts.public')

@section('title', 'Beranda')
@section('meta_description', 'Website resmi Yayasan Alfa Mandala Papua')

@section('content')
<div class="text-center mb-5">
    <h1 class="fw-bold">Selamat Datang di Yayasan Alfa Mandala Papua</h1>
    <p class="text-muted">
        Membangun SDM Papua melalui pendidikan, pelatihan, dan pengembangan bahasa.
    </p>
</div>

<div class="row text-center">
    <div class="col-md-4">
        <div class="card shadow-sm">
            <div class="card-body">
                <h5>Program</h5>
                <p>Pendidikan & pelatihan</p>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card shadow-sm">
            <div class="card-body">
                <h5>Galeri</h5>
                <p>Kegiatan yayasan</p>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card shadow-sm">
            <div class="card-body">
                <h5>Berita</h5>
                <p>Info terbaru</p>
            </div>
        </div>
    </div>
</div>
@endsection
