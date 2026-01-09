@extends('layouts.public')

@section('title', 'Program Yayasan')

@section('content')
<div class="container py-5">
    <h2 class="text-center fw-bold mb-4 text-primary">
        Program Yayasan
    </h2>

    <div class="row g-4">
        @forelse ($programs as $program)
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm program-card">

                    {{-- Gambar Program --}}
                    @if($program->gambar)
                        <img src="{{ asset('storage/'.$program->gambar) }}"
                             class="card-img-top"
                             style="height:200px; object-fit:cover;">
                    @else
                        <div class="d-flex align-items-center justify-content-center bg-light"
                             style="height:200px;">
                            <span class="text-muted">Tidak ada gambar</span>
                        </div>
                    @endif

                    <div class="card-body">
                        <h5 class="card-title fw-bold">
                            {{ $program->judul }}
                        </h5>
                        <p class="card-text text-muted">
                            {{ Str::limit($program->deskripsi, 100) }}
                        </p>
                    </div>

                </div>
            </div>
        @empty
            <div class="col-12 text-center text-muted">
                Belum ada program.
            </div>
        @endforelse
    </div>
</div>

<style>
.program-card {
    transition: all 0.3s ease;
}
.program-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 10px 30px rgba(13,71,161,.25);
}
</style>
@endsection
