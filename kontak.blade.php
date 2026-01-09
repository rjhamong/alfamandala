@extends('layout.main')

@section('content')
<div class="row">
    <div class="col-md-10 mx-auto">

        <h2 class="fw-bold mb-4 text-center">Kontak Kami</h2>

        <p class="text-center mb-5">
            Silakan menghubungi Yayasan ALFA MANDALA PAPUA melalui informasi
            kontak berikut untuk kerja sama, pendaftaran, atau informasi lebih lanjut.
        </p>

        <div class="row">

            <!-- Informasi Kontak -->
            <div class="col-md-5 mb-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <h5 class="fw-bold mb-3">Informasi Kontak</h5>

                        <p><strong>Nama Yayasan:</strong><br>
                        Yayasan ALFA MANDALA PAPUA</p>

                        <p><strong>Lembaga:</strong><br>
                        Papua Okasil Institute</p>

                        <p><strong>Alamat:</strong><br>
                        Desa Dabolding, Distrik Kalomdol,<br>
                        Pegunungan Bintang, Papua Pegunungan,<br>
                        Indonesia
                        </p>

                        <p><strong>Email:</strong><br>
                        alfamandalapapua@gmail.com</p>

                        <p><strong>WhatsApp:</strong><br>
                        <a href="https://wa.me/628xxxxxxxxxx" target="_blank">
                            +62 8xx-xxxx-xxxx
                        </a>
                        </p>
                    </div>
                </div>
            </div>

            <!-- Google Maps -->
            <div class="col-md-7 mb-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body p-0">
                        <iframe
                            src="https://www.google.com/maps?q=Pegunungan+Bintang+Papua&output=embed"
                            width="100%"
                            height="100%"
                            style="border:0;"
                            allowfullscreen=""
                            loading="lazy">
                        </iframe>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>
@endsection
