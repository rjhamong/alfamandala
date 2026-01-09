@extends('layouts.public')

@section('title', 'Galeri Kegiatan')

@section('content')
<div class="container py-5">
    <h2 class="text-center fw-bold mb-4">Galeri Kegiatan</h2>

    @if($galeris->count())
        <div class="row g-4">
            @foreach($galeris as $g)
                <div class="col-md-4">
                    <div class="card shadow-sm border-0">
                        <img src="{{ asset('storage/'.$g->foto) }}"
                             class="card-img-top"
                             style="height:220px; object-fit:cover;">
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <p class="text-center text-muted">Galeri belum tersedia.</p>
    @endif
</div>
@endsection
    </div>
</div>

{{-- MODAL ZOOM --}}
<div class="modal fade" id="modalGaleri" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content bg-dark">
            <div class="modal-header border-0">
                <h5 class="modal-title text-white" id="modalTitle"></h5>
                <button type="button" class="btn-close btn-close-white"
                        data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body text-center">
                <img id="modalImage" class="img-fluid rounded">
            </div>
        </div>
    </div>
</div>

{{-- SCRIPT --}}
<script>
document.addEventListener('DOMContentLoaded', function () {
    const modal = document.getElementById('modalGaleri');
    modal.addEventListener('show.bs.modal', function (event) {
        const button = event.relatedTarget;
        document.getElementById('modalImage').src = button.getAttribute('data-img');
        document.getElementById('modalTitle').innerText = button.getAttribute('data-title');
    });
});
</script>

<style>
.galeri-item {
    cursor: pointer;
    overflow
