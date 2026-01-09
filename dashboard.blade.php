@extends('admin.layouts.app')

@section('content')
<h3>Dashboard</h3>

<div class="row mt-4">
    <div class="col-md-4">
        <div class="card shadow">
            <div class="card-body text-center">
                <h5>Program</h5>
                <a href="{{ route('admin.program.index') }}" class="btn btn-primary btn-sm">
                    Kelola Program
                </a>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card shadow">
            <div class="card-body text-center">
                <h5>Galeri</h5>
                <a href="{{ route('admin.galeri.index') }}" class="btn btn-success btn-sm">
                    Kelola Galeri
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
